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

/**
 * Keep the entity's own CSS separate from the read-only inherited preview.
 */
export async function initCustomCssEditor(container, options) {
    const root = container.closest('.asset');
    const select = root.querySelector('select[name="enable_custom_css"]');
    const disabled_message = root.querySelector('[data-custom-css-disabled]');
    const form = container.closest('form');
    let custom_css = options.customCss;
    let editor = null;
    let editor_mode = select.value;

    const refresh = () => {
        const inherits = select.value === '-2';
        const enabled = select.value === '1' || (inherits && options.inheritedEnabled);
        container.classList.toggle('d-none', !enabled);
        disabled_message.classList.toggle('d-none', enabled);

        if (editor === null) {
            return;
        }

        if (editor_mode === '1') {
            custom_css = editor.getValue();
        }
        const css = inherits ? options.inheritedCss : custom_css;
        if (editor.getValue() !== css) {
            editor.setValue(css);
        }
        editor.updateOptions({readOnly: !options.canEdit || select.value !== '1'});
        editor_mode = select.value;
        if (enabled) {
            editor.layout();
        }
    };

    $(select).on('change', refresh);
    $(form).on('formdata', (event) => {
        if (!options.canEdit || select.value === '-2') {
            return;
        }
        if (editor !== null && editor_mode === '1') {
            custom_css = editor.getValue();
        }
        event.originalEvent.formData.set('custom_css_code', custom_css);
    });

    // Tab contents can be replaced without navigating away from the page.
    window.monaco?.editor.getEditors().forEach((previous) => {
        if (previous.getContainerDomNode().id === container.id) {
            previous.dispose();
        }
    });

    refresh();
    const result = await window.GLPI.Monaco.createEditor(
        container.id,
        'css',
        editor_mode === '-2' ? options.inheritedCss : custom_css,
        [],
        {
            _force_default_lang: true,
            readOnly: !options.canEdit || editor_mode !== '1',
        }
    );
    if (!container.isConnected) {
        result.editor.dispose();
        return;
    }
    editor = result.editor;
    refresh();
}
