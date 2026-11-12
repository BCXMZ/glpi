/* Preserve entity branding through the native GLPI login and retry flow. */
(() => {
    const init = () => {
        const stylesheet = document.querySelector('link[href*="/branding/front/login.css.php"]');
        if (!stylesheet || !document.body.classList.contains('welcome-anonymous')) {
            return;
        }
        const cssUrl = new URL(stylesheet.href);
        const entity = cssUrl.searchParams.get('branding_entity');
        if (!entity || !/^\d+$/.test(entity)) {
            return;
        }
        const root = cssUrl.pathname.replace(/\/(plugins|marketplace)\/branding\/front\/login\.css\.php$/, '');
        for (const form of document.querySelectorAll('form[action]')) {
            const action = new URL(form.action);
            if (action.origin === location.origin && action.pathname === `${root}/front/login.php`) {
                action.searchParams.set('branding_entity', entity);
                form.action = action.href;
            }
        }
        // GLPI's failed-login retry logs out before returning to index.php.
        // Perform that cleanup, then reopen the same entity's login page.
        for (const link of document.querySelectorAll('a[href]')) {
            const logout = new URL(link.href);
            if (logout.origin !== location.origin || logout.pathname !== `${root}/front/logout.php`) {
                continue;
            }
            const login = new URL(`${root}/index.php`, location.origin);
            login.search = logout.search;
            login.searchParams.set('branding_entity', entity);
            link.addEventListener('click', async (event) => {
                if (event.button !== 0 || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) {
                    return;
                }
                event.preventDefault();
                try {
                    await fetch(logout.href, { credentials: 'same-origin' });
                    location.assign(login.href);
                } catch {
                    location.assign(logout.href);
                }
            });
        }
    };
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init, { once: true });
    } else {
        init();
    }
})();
