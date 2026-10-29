/**
 * ST-Custom Login 2.2.1
 * Defensive, idempotent customization for GLPI 10 and GLPI 11.
 */
(() => {
    'use strict';

    const ROOT = document.documentElement;
    const PLUGIN_VERSION = '2.2.1';
    const CONFIG_ELEMENT_ID = 'st-customlogin-config';
    const BRANDING_ID = 'stcl-login-branding';
    const LOGIN_LOGO_ID = 'stcl-login-logo';
    const HEADING_ID = 'stcl-login-heading';
    const FOOTER_ID = 'stcl-login-footer';
    const NATIVE_LOGIN_LOGO_CLASS = 'stcl-native-login-logo-hidden';
    const PROMPT_HEADER_MARKER = 'stclPromptHeader';
    const PROMPT_HEADING_MARKER = 'stclPromptHeading';
    const FAVICON_SELECTOR = 'link[data-stcl-favicon="1"]';
    const CLASS_NAMES = [
        'stcl-enabled',
        'stcl-login-enabled',
        'stcl-internal-enabled',
        'stcl-sidebar-effect-enabled',
        'stcl-login-background-custom',
        'stcl-login-logo-custom',
        'stcl-navbar-logo-custom',
        'stcl-navbar-logo-collapsed-custom'
    ];
    const LOGIN_ALIGNMENT_CLASSES = [
        'stcl-login-align-left',
        'stcl-login-align-center',
        'stcl-login-align-right'
    ];
    const SIDEBAR_THEME_CLASSES = [
        'stcl-sidebar-theme-service-tic',
        'stcl-sidebar-theme-ocean',
        'stcl-sidebar-theme-emerald',
        'stcl-sidebar-theme-violet',
        'stcl-sidebar-theme-cyan',
        'stcl-sidebar-theme-ruby',
        'stcl-sidebar-theme-graphite'
    ];
    const ALLOWED_FAVICON_MIMES = new Set([
        'image/png',
        'image/jpeg',
        'image/webp',
        'image/x-icon',
        'image/vnd.microsoft.icon'
    ]);

    let activeConfig = null;
    let observer = null;
    let scheduled = false;

    const isObject = (value) => value !== null && typeof value === 'object' && !Array.isArray(value);

    const stringValue = (value, fallback = '') => typeof value === 'string' ? value : fallback;

    const integerValue = (value, minimum, maximum, fallback) => {
        const parsed = Number.parseInt(value, 10);
        if (!Number.isFinite(parsed)) {
            return fallback;
        }
        return Math.min(maximum, Math.max(minimum, parsed));
    };

    const colorValue = (value, fallback) => /^#[0-9a-f]{6}$/i.test(stringValue(value))
        ? stringValue(value).toLowerCase()
        : fallback;

    const assetUrlValue = (value) => {
        const url = stringValue(value).trim();
        if (url === '') {
            return '';
        }

        try {
            const base = new URL(document.baseURI || window.location.href, window.location.href);
            const parsed = new URL(url, base);
            if (
                parsed.origin !== base.origin
                || !['http:', 'https:'].includes(parsed.protocol)
            ) {
                return '';
            }
        } catch (error) {
            console.debug('[ST-Custom Login] URL de ativo inválida ignorada.', error);
            return '';
        }

        return url;
    };

    const urlValue = (value) => {
        const url = assetUrlValue(value);
        if (url === '') {
            return 'none';
        }

        const escaped = url
            .replace(/\\/g, '\\\\')
            .replace(/"/g, '\\"')
            .replace(/[\r\n\f]/g, '');

        return `url("${escaped}")`;
    };

    const normalizeConfig = (raw) => {
        const source = isObject(raw) ? raw : {};
        const login = isObject(source.login) ? source.login : {};
        const internal = isObject(source.internal) ? source.internal : {};
        const allowedAlignments = new Set(['left', 'center', 'right']);
        const allowedSidebarPresets = new Set([
            'service-tic',
            'ocean',
            'emerald',
            'violet',
            'cyan',
            'ruby',
            'graphite'
        ]);
        const alignment = stringValue(login.alignment, 'center');
        const sidebarPreset = stringValue(internal.sidebarEffectPreset, 'service-tic');
        const faviconMime = stringValue(source.faviconMime).toLowerCase();

        return {
            enabled: source.enabled !== false,
            login: {
                enabled: login.enabled !== false,
                title: stringValue(login.title).slice(0, 160),
                subtitle: stringValue(login.subtitle).slice(0, 300),
                promptEnabled: login.promptEnabled !== false,
                promptText: stringValue(login.promptText).slice(0, 200),
                footer: stringValue(login.footer).slice(0, 300),
                primaryColor: colorValue(login.primaryColor, '#206bc4'),
                backgroundOverlay: integerValue(login.backgroundOverlay, 0, 80, 18),
                alignment: allowedAlignments.has(alignment) ? alignment : 'center',
                cardWidth: integerValue(login.cardWidth, 320, 760, 480),
                logoWidth: integerValue(login.logoWidth, 60, 420, 180),
                logoHeight: integerValue(login.logoHeight, 30, 300, 100),
                backgroundUrl: assetUrlValue(login.backgroundUrl),
                logoUrl: assetUrlValue(login.logoUrl)
            },
            internal: {
                enabled: internal.enabled !== false,
                logoWidth: integerValue(internal.logoWidth, 40, 320, 150),
                logoHeight: integerValue(internal.logoHeight, 20, 120, 42),
                logoUrl: assetUrlValue(internal.logoUrl),
                collapsedLogoWidth: integerValue(internal.collapsedLogoWidth, 20, 120, 42),
                collapsedLogoHeight: integerValue(internal.collapsedLogoHeight, 20, 120, 42),
                collapsedLogoUrl: assetUrlValue(internal.collapsedLogoUrl),
                sidebarEffectEnabled: internal.sidebarEffectEnabled === true,
                sidebarEffectPreset: allowedSidebarPresets.has(sidebarPreset)
                    ? sidebarPreset
                    : 'service-tic'
            },
            faviconUrl: assetUrlValue(source.faviconUrl),
            faviconMime: ALLOWED_FAVICON_MIMES.has(faviconMime) ? faviconMime : ''
        };
    };

    const readEmbeddedConfig = () => {
        const element = document.getElementById(CONFIG_ELEMENT_ID);
        if (!element) {
            return null;
        }

        try {
            return JSON.parse(element.textContent || '{}');
        } catch (error) {
            console.warn('[ST-Custom Login] Configuração incorporada inválida.', error);
            return null;
        }
    };

    const findScriptBase = () => {
        const scripts = Array.from(document.scripts || []);
        const current = document.currentScript;
        if (current?.src) {
            scripts.unshift(current);
        }

        for (const script of scripts) {
            if (!script?.src || !/(?:public\/)?js\/customlogin\.js(?:[?#]|$)/.test(script.src)) {
                continue;
            }

            try {
                const base = new URL(document.baseURI || window.location.href, window.location.href);
                const parsed = new URL(script.src, base);
                if (parsed.origin !== base.origin) {
                    continue;
                }
                return parsed.pathname.replace(/\/(?:public\/)?js\/customlogin\.js$/, '');
            } catch (error) {
                console.warn('[ST-Custom Login] Não foi possível interpretar a URL do recurso.', error);
            }
        }

        return '';
    };

    const fetchConfig = async () => {
        const base = findScriptBase();
        if (base === '') {
            return null;
        }

        const candidates = [`${base}/config.php`, `${base}/public/config.php`];
        for (const endpoint of candidates) {
            try {
                const response = await fetch(endpoint, {
                    method: 'GET',
                    credentials: 'same-origin',
                    cache: 'no-store',
                    headers: { Accept: 'application/json' }
                });

                if (!response.ok) {
                    continue;
                }

                const payload = await response.json();
                if (isObject(payload)) {
                    return payload;
                }
            } catch (error) {
                console.debug('[ST-Custom Login] Endpoint de configuração indisponível.', endpoint, error);
            }
        }

        return null;
    };

    const getLoginControl = () => document.querySelector(
        '#login_name, input[name="fielda"], input[name="login_name"]'
    );

    const isLoginPage = () => {
        if (document.body?.classList.contains('welcome-anonymous')) {
            return true;
        }

        return Boolean(document.querySelector(
            '.page-anonymous, #login_name, input[name="fielda"], input[name="login_name"]'
        ));
    };

    const findLoginCardBody = () => {
        const closestCardBody = getLoginControl()?.closest('.card-body');
        if (closestCardBody) {
            return closestCardBody;
        }

        const selectors = [
            'main#page.page-anonymous .main-content-card .card-body',
            'main.page-anonymous .main-content-card .card-body',
            '.page-anonymous .main-content-card .card-body',
            '.page-anonymous .card .card-body',
            '.page-anonymous .card-body'
        ];

        for (const selector of selectors) {
            const target = document.querySelector(selector);
            if (target) {
                return target;
            }
        }

        return null;
    };

    const findLoginForm = () => getLoginControl()?.closest('form')
        || findLoginCardBody()?.querySelector('form')
        || null;

    const applyStyles = (config) => {
        const loginEnabled = config.enabled && config.login.enabled;
        const internalEnabled = config.enabled && config.internal.enabled;
        const sidebarEffectEnabled = internalEnabled && config.internal.sidebarEffectEnabled;
        const hasBackground = loginEnabled && config.login.backgroundUrl !== '';
        const hasLoginLogo = loginEnabled && config.login.logoUrl !== '';
        const hasNavbarLogo = internalEnabled && config.internal.logoUrl !== '';
        const collapsedSource = config.internal.collapsedLogoUrl || config.internal.logoUrl;
        const hasCollapsedNavbarLogo = internalEnabled && collapsedSource !== '';

        for (const className of LOGIN_ALIGNMENT_CLASSES) {
            ROOT.classList.remove(className);
        }
        for (const className of SIDEBAR_THEME_CLASSES) {
            ROOT.classList.remove(className);
        }

        ROOT.classList.toggle('stcl-enabled', config.enabled);
        ROOT.classList.toggle('stcl-login-enabled', loginEnabled);
        ROOT.classList.toggle('stcl-internal-enabled', internalEnabled);
        ROOT.classList.toggle('stcl-sidebar-effect-enabled', sidebarEffectEnabled);
        ROOT.classList.toggle('stcl-login-background-custom', hasBackground);
        ROOT.classList.toggle('stcl-login-logo-custom', hasLoginLogo);
        ROOT.classList.toggle('stcl-navbar-logo-custom', hasNavbarLogo);
        ROOT.classList.toggle('stcl-navbar-logo-collapsed-custom', hasCollapsedNavbarLogo);

        if (loginEnabled) {
            ROOT.classList.add(`stcl-login-align-${config.login.alignment}`);
        }
        if (sidebarEffectEnabled) {
            ROOT.classList.add(`stcl-sidebar-theme-${config.internal.sidebarEffectPreset}`);
        }

        ROOT.dataset.stclVersion = PLUGIN_VERSION;
        ROOT.dataset.stclApplied = '1';
        if (loginEnabled) {
            ROOT.dataset.stclLoginAlignment = config.login.alignment;
        } else {
            delete ROOT.dataset.stclLoginAlignment;
        }
        if (sidebarEffectEnabled) {
            ROOT.dataset.stclSidebarPreset = config.internal.sidebarEffectPreset;
        } else {
            delete ROOT.dataset.stclSidebarPreset;
        }

        ROOT.style.setProperty('--stcl-primary-color', config.login.primaryColor);
        ROOT.style.setProperty('--stcl-background-overlay', String(config.login.backgroundOverlay / 100));
        ROOT.style.setProperty('--stcl-card-width', `${config.login.cardWidth}px`);
        ROOT.style.setProperty('--stcl-login-logo-width', `${config.login.logoWidth}px`);
        ROOT.style.setProperty('--stcl-login-logo-height', `${config.login.logoHeight}px`);
        ROOT.style.setProperty('--stcl-navbar-logo-width', `${config.internal.logoWidth}px`);
        ROOT.style.setProperty('--stcl-navbar-logo-height', `${config.internal.logoHeight}px`);
        ROOT.style.setProperty('--stcl-navbar-logo-collapsed-width', `${config.internal.collapsedLogoWidth}px`);
        ROOT.style.setProperty('--stcl-navbar-logo-collapsed-height', `${config.internal.collapsedLogoHeight}px`);
        ROOT.style.setProperty('--stcl-login-background-image', urlValue(config.login.backgroundUrl));
        ROOT.style.setProperty('--stcl-navbar-logo-image', urlValue(config.internal.logoUrl));
        ROOT.style.setProperty('--stcl-navbar-logo-collapsed-image', urlValue(collapsedSource));
    };

    const syncNativeLoginLogo = (hide) => {
        const logos = Array.from(document.querySelectorAll('.page-anonymous .glpi-logo'));
        for (const logo of logos) {
            const isInsideCard = Boolean(logo.closest('.card, .card-body, .main-content-card'));
            logo.classList.toggle(NATIVE_LOGIN_LOGO_CLASS, hide && !isInsideCard);
        }
    };

    const ensureBrandingContainer = (config) => {
        const existing = document.getElementById(BRANDING_ID);
        const hasContent = config.login.logoUrl !== ''
            || config.login.title !== ''
            || config.login.subtitle !== '';

        if (!config.enabled || !config.login.enabled || !hasContent) {
            existing?.remove();
            syncNativeLoginLogo(false);
            return null;
        }

        const target = findLoginCardBody();
        if (!target) {
            return null;
        }

        let branding = existing;
        if (!branding) {
            branding = document.createElement('div');
            branding.id = BRANDING_ID;
            branding.className = 'stcl-login-branding';
        }

        if (branding.parentElement !== target) {
            target.prepend(branding);
        }

        return branding;
    };

    const ensureLoginLogo = (config, branding) => {
        const existing = document.getElementById(LOGIN_LOGO_ID);
        const url = config.enabled && config.login.enabled ? config.login.logoUrl : '';

        if (!branding || url === '') {
            existing?.remove();
            syncNativeLoginLogo(false);
            return;
        }

        let image = existing;
        if (!image) {
            image = document.createElement('img');
            image.id = LOGIN_LOGO_ID;
            image.className = 'stcl-login-logo';
            image.decoding = 'async';
        }

        if (image.parentElement !== branding) {
            branding.prepend(image);
        }
        if (image.getAttribute('src') !== url) {
            image.src = url;
        }

        const alt = config.login.title || 'Logotipo da tela de login';
        if (image.getAttribute('alt') !== alt) {
            image.alt = alt;
        }

        syncNativeLoginLogo(true);
    };

    const ensureLoginHeading = (config, branding) => {
        const existing = document.getElementById(HEADING_ID);
        const hasContent = config.login.title !== '' || config.login.subtitle !== '';

        if (!branding || !hasContent) {
            existing?.remove();
            return;
        }

        let wrapper = existing;
        if (!wrapper) {
            wrapper = document.createElement('div');
            wrapper.id = HEADING_ID;
            wrapper.className = 'stcl-login-heading';
            wrapper.setAttribute('aria-live', 'polite');
        }

        if (wrapper.parentElement !== branding) {
            branding.append(wrapper);
        }

        let title = wrapper.querySelector('.stcl-login-title');
        if (config.login.title !== '') {
            if (!title) {
                title = document.createElement('h1');
                title.className = 'stcl-login-title';
                wrapper.prepend(title);
            }
            if (title.textContent !== config.login.title) {
                title.textContent = config.login.title;
            }
        } else {
            title?.remove();
        }

        let subtitle = wrapper.querySelector('.stcl-login-subtitle');
        if (config.login.subtitle !== '') {
            if (!subtitle) {
                subtitle = document.createElement('p');
                subtitle.className = 'stcl-login-subtitle';
                wrapper.append(subtitle);
            }
            if (subtitle.textContent !== config.login.subtitle) {
                subtitle.textContent = config.login.subtitle;
            }
        } else {
            subtitle?.remove();
        }
    };

    const ensureLoginBranding = (config) => {
        const branding = ensureBrandingContainer(config);
        ensureLoginLogo(config, branding);
        ensureLoginHeading(config, branding);
    };

    const findLoginPrompt = () => {
        const control = getLoginControl();
        const form = findLoginForm();
        if (!control || !form) {
            return null;
        }

        const column = control.closest('.col-md-5, .col-sm-5, .col-lg-5, [class*="col-"]');
        let header = null;
        if (column) {
            header = Array.from(column.children).find((child) => child.classList?.contains('card-header')) || null;
        }

        if (!header) {
            header = form.querySelector('.row.justify-content-center > [class*="col-"] > .card-header')
                || form.querySelector('.card-header.mb-4');
        }

        const heading = header?.querySelector('h1, h2, h3, h4, h5, h6') || null;
        return header && heading ? { header, heading } : null;
    };

    const rememberPromptState = ({ header, heading }) => {
        if (!(PROMPT_HEADER_MARKER in header.dataset)) {
            header.dataset[PROMPT_HEADER_MARKER] = '1';
            header.dataset.stclOriginalHidden = header.hidden ? '1' : '0';
        }
        if (!(PROMPT_HEADING_MARKER in heading.dataset)) {
            heading.dataset[PROMPT_HEADING_MARKER] = '1';
            heading.dataset.stclOriginalText = heading.textContent || '';
        }
    };

    const restorePromptNode = ({ header, heading }) => {
        if (heading.dataset[PROMPT_HEADING_MARKER] === '1') {
            const original = heading.dataset.stclOriginalText;
            if (typeof original === 'string' && heading.textContent !== original) {
                heading.textContent = original;
            }
        }

        header.classList.remove('stcl-login-prompt-hidden');
        if (header.dataset[PROMPT_HEADER_MARKER] === '1') {
            header.hidden = header.dataset.stclOriginalHidden === '1';
        }
    };

    const restoreAllLoginPrompts = () => {
        const headers = document.querySelectorAll(`[data-${PROMPT_HEADER_MARKER.replace(/[A-Z]/g, (letter) => `-${letter.toLowerCase()}`)}="1"]`);
        for (const header of headers) {
            const heading = header.querySelector(`[data-${PROMPT_HEADING_MARKER.replace(/[A-Z]/g, (letter) => `-${letter.toLowerCase()}`)}="1"]`)
                || header.querySelector('h1, h2, h3, h4, h5, h6');
            if (heading) {
                restorePromptNode({ header, heading });
            }
        }
    };

    const applyLoginPrompt = (config) => {
        const prompt = findLoginPrompt();
        if (!prompt) {
            return;
        }

        rememberPromptState(prompt);

        if (!config.enabled || !config.login.enabled) {
            restorePromptNode(prompt);
            return;
        }

        if (!config.login.promptEnabled) {
            prompt.header.hidden = true;
            prompt.header.classList.add('stcl-login-prompt-hidden');
            return;
        }

        prompt.header.hidden = false;
        prompt.header.classList.remove('stcl-login-prompt-hidden');
        const text = config.login.promptText;
        const targetText = text !== '' ? text : (prompt.heading.dataset.stclOriginalText || '');
        if (prompt.heading.textContent !== targetText) {
            prompt.heading.textContent = targetText;
        }
    };

    const ensureLoginFooter = (config) => {
        const existing = document.getElementById(FOOTER_ID);
        const text = config.login.footer;

        if (!config.enabled || !config.login.enabled || text === '') {
            existing?.remove();
            return;
        }

        const target = document.querySelector(
            'main#page.page-anonymous .container-tight, main.page-anonymous .container-tight, '
            + '.page-anonymous .container-tight, main#page.page-anonymous, .page-anonymous'
        );
        if (!target) {
            return;
        }

        let footer = existing;
        if (!footer) {
            footer = document.createElement('div');
            footer.id = FOOTER_ID;
            footer.className = 'stcl-login-footer';
        }

        if (footer.parentElement !== target) {
            target.append(footer);
        }
        if (footer.textContent !== text) {
            footer.textContent = text;
        }
    };

    const applyFavicon = (config) => {
        const url = config.enabled ? config.faviconUrl : '';
        const existing = Array.from(document.querySelectorAll(FAVICON_SELECTOR));

        if (url === '') {
            for (const link of existing) {
                link.remove();
            }
            return;
        }

        const definitions = [
            { rel: 'icon', marker: 'icon' },
            { rel: 'shortcut icon', marker: 'shortcut' }
        ];

        for (const definition of definitions) {
            let link = document.querySelector(
                `link[data-stcl-favicon="1"][data-stcl-favicon-kind="${definition.marker}"]`
            );
            if (!link) {
                link = document.createElement('link');
                link.dataset.stclFavicon = '1';
                link.dataset.stclFaviconKind = definition.marker;
                document.head?.append(link);
            }

            link.rel = definition.rel;
            if (link.getAttribute('href') !== url) {
                link.href = url;
            }

            if (config.faviconMime !== '') {
                link.type = config.faviconMime;
            } else {
                link.removeAttribute('type');
            }
        }
    };

    const applyDynamicElements = () => {
        if (!activeConfig) {
            return;
        }

        if (isLoginPage()) {
            ensureLoginBranding(activeConfig);
            applyLoginPrompt(activeConfig);
            ensureLoginFooter(activeConfig);
        } else {
            document.getElementById(BRANDING_ID)?.remove();
            document.getElementById(FOOTER_ID)?.remove();
            syncNativeLoginLogo(false);
            restoreAllLoginPrompts();
        }

        applyFavicon(activeConfig);
    };

    const stopObserver = () => {
        if (observer) {
            observer.disconnect();
            observer = null;
        }
        scheduled = false;
    };

    const syncObserver = () => {
        const shouldObserve = Boolean(
            activeConfig?.enabled
            && activeConfig.login.enabled
            && isLoginPage()
            && document.documentElement
        );

        if (!shouldObserve) {
            stopObserver();
            return;
        }

        if (observer) {
            return;
        }

        observer = new MutationObserver(() => {
            if (scheduled) {
                return;
            }

            scheduled = true;
            window.requestAnimationFrame(() => {
                scheduled = false;
                applyDynamicElements();
                if (!isLoginPage()) {
                    stopObserver();
                }
            });
        });

        observer.observe(document.documentElement, { childList: true, subtree: true });
    };

    const applyConfig = (rawConfig) => {
        try {
            activeConfig = normalizeConfig(rawConfig);
            applyStyles(activeConfig);
            applyDynamicElements();
            syncObserver();
            document.dispatchEvent(new CustomEvent('stcustomlogin:applied', {
                detail: { enabled: activeConfig.enabled }
            }));
        } catch (error) {
            stopObserver();
            for (const className of [...CLASS_NAMES, ...LOGIN_ALIGNMENT_CLASSES, ...SIDEBAR_THEME_CLASSES]) {
                ROOT.classList.remove(className);
            }
            delete ROOT.dataset.stclLoginAlignment;
            delete ROOT.dataset.stclSidebarPreset;
            document.getElementById(BRANDING_ID)?.remove();
            document.getElementById(FOOTER_ID)?.remove();
            syncNativeLoginLogo(false);
            restoreAllLoginPrompts();
            applyFavicon({ enabled: false, faviconUrl: '', faviconMime: '' });
            delete ROOT.dataset.stclApplied;
            console.error('[ST-Custom Login] A personalização foi ignorada para preservar o login nativo.', error);
        }
    };

    const start = async () => {
        const embedded = readEmbeddedConfig();
        if (embedded) {
            applyConfig(embedded);
            return;
        }

        const remote = await fetchConfig();
        if (remote) {
            applyConfig(remote);
        }
    };

    window.STCustomLogin = Object.freeze({
        applyConfig,
        normalizeConfig
    });

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', start, { once: true });
    } else {
        start();
    }
})();
