/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2026 Teclib' and contributors.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

import { initCustomCssEditor } from '/js/modules/Entity/CustomCssEditor.js';
import { jest } from '@jest/globals';

const own_css = 'body { color: blue; }';
const parent_css = 'body { color: red; }';
let editor;
let select;
let container;
let create_editor;

const initialize = (mode = '-2', inherited_enabled = true) => {
    select.value = mode;
    return initCustomCssEditor(container, {
        customCss: own_css,
        inheritedCss: parent_css,
        inheritedEnabled: inherited_enabled,
        canEdit: true,
    });
};

const changeMode = (mode) => {
    $(select).val(mode).trigger('change');
};

const serialize = () => {
    const data = new FormData();
    const event = new Event('formdata');
    event.formData = data;
    document.querySelector('form').dispatchEvent(event);
    return data;
};

beforeEach(() => {
    document.body.innerHTML = `
        <div class="asset">
            <form>
                <select name="enable_custom_css">
                    <option value="-2">Inherit</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                <div id="custom_css_container"></div>
                <div data-custom-css-disabled>Custom CSS is disabled</div>
            </form>
        </div>
    `;
    select = document.querySelector('select');
    container = document.getElementById('custom_css_container');
    let value = '';
    editor = {
        getValue: () => value,
        setValue: (next) => { value = next; },
        updateOptions: jest.fn(),
        layout: jest.fn(),
        dispose: jest.fn(),
    };
    create_editor = jest.fn(async (_id, _language, initial) => {
        value = initial;
        return {editor};
    });
    window.GLPI = {Monaco: {createEditor: create_editor}};
    window.monaco = {editor: {getEditors: () => []}};
});

test('enabling inherited CSS makes the own code editable', async () => {
    await initialize();
    expect(editor.getValue()).toBe(parent_css);
    expect(editor.updateOptions).toHaveBeenLastCalledWith({readOnly: true});

    changeMode('1');
    expect(editor.getValue()).toBe(own_css);
    expect(editor.updateOptions).toHaveBeenLastCalledWith({readOnly: false});
    expect(container.classList.contains('d-none')).toBe(false);
});

test('switching modes preserves unsaved CSS and does not save inherited CSS', async () => {
    await initialize('1');
    const edited = 'body { color: green; }';
    editor.setValue(edited);
    changeMode('-2');
    expect(editor.getValue()).toBe(parent_css);
    expect(serialize().has('custom_css_code')).toBe(false);

    changeMode('1');
    expect(editor.getValue()).toBe(edited);
    expect(serialize().get('custom_css_code')).toBe(edited);
    changeMode('0');
    expect(serialize().get('custom_css_code')).toBe(edited);
    changeMode('1');
    expect(editor.getValue()).toBe(edited);
    expect(create_editor).toHaveBeenCalledTimes(1);
});

test('an enabled entity remains editable when its parent disables CSS', async () => {
    await initialize('1', false);
    expect(container.classList.contains('d-none')).toBe(false);
    expect(editor.getValue()).toBe(own_css);

    changeMode('-2');
    expect(container.classList.contains('d-none')).toBe(true);
    expect(document.querySelector('[data-custom-css-disabled]').classList.contains('d-none')).toBe(false);

    changeMode('1');
    expect(container.classList.contains('d-none')).toBe(false);
    expect(editor.updateOptions).toHaveBeenLastCalledWith({readOnly: false});
});

test('a mode change during editor loading does not overwrite the own CSS', async () => {
    let resolve_editor;
    create_editor.mockImplementation((_id, _language, initial) => {
        editor.setValue(initial);
        return new Promise((resolve) => { resolve_editor = resolve; });
    });
    const ready = initialize();
    changeMode('1');
    resolve_editor({editor});
    await ready;

    expect(editor.getValue()).toBe(own_css);
    expect(editor.updateOptions).toHaveBeenLastCalledWith({readOnly: false});
    expect(serialize().get('custom_css_code')).toBe(own_css);
});

test('an editor finishing after its tab was closed is disposed', async () => {
    let resolve_editor;
    create_editor.mockImplementation(() => new Promise((resolve) => { resolve_editor = resolve; }));
    const ready = initialize();
    container.remove();
    resolve_editor({editor});
    await ready;

    expect(editor.dispose).toHaveBeenCalledTimes(1);
});
