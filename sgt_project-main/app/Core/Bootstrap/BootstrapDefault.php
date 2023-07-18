<?php

namespace App\Core\Bootstrap;

class BootstrapDefault
{
    public function init()
    {
        // 1) Light sidebar layout (default.html)
        // $this->initLightSidebarLayout();

        // 2) Dark sidebar layout (default.html)
        $this->initDarkSidebarLayout();

        // 3) Dark header layout (default_header_layout.html)
        // $this->initDarkHeaderLayout();

        // 4) Light header layout (default_header_layout.html)
        // $this->initLightHeaderLayout();

        # Init global assets for default layout
        $this->initAssets();
        addCssFile('assets/css/style.css');
        addCssFile('https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css');
        addCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
        addCssFile('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
        addCssFile('https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css');
        addJavascriptFile('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
        addJavascriptFile('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
        addJavascriptFile('https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js');
        addJavascriptFile('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js');
        addJavascriptFile('assets/js/scripts/script.js');
    }

    public function initAssets()
    {
        # Include global vendors
        addVendors(['datatables', 'fullcalendar']);

        # Include global javascript files
        addJavascriptFile('assets/js/custom/widgets.js');
        addJavascriptFile('assets/js/custom/apps/chat/chat.js');
        addJavascriptFile('assets/js/custom/utilities/modals/upgrade-plan.js');
        addJavascriptFile('assets/js/custom/utilities/modals/create-app.js');
        addJavascriptFile('assets/js/custom/utilities/modals/users-search.js');
        addJavascriptFile('assets/js/custom/utilities/modals/new-target.js');
    }

    public function initDarkSidebarLayout()
    {
        addHtmlAttribute('body', 'data-kt-app-layout', 'dark-sidebar');
        addHtmlAttribute('body', 'data-kt-app-header-fixed', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-enabled', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-fixed', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-hoverable', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-header', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-toolbar', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-footer', 'true');
        addHtmlAttribute('body', 'data-kt-app-toolbar-enabled', 'true');

        addHtmlClass('body', 'app-default');
    }

    public function initLightSidebarLayout()
    {
        addHtmlAttribute('body', 'data-kt-app-layout', 'light-sidebar');
        addHtmlAttribute('body', 'data-kt-app-header-fixed', 'false');
        addHtmlAttribute('body', 'data-kt-app-sidebar-enabled', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-fixed', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-hoverable', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-header', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-toolbar', 'true');
        addHtmlAttribute('body', 'data-kt-app-sidebar-push-footer', 'true');
        addHtmlAttribute('body', 'data-kt-app-toolbar-enabled', 'true');

        addHtmlClass('body', 'app-default');
    }

    public function initDarkHeaderLayout()
    {
        addHtmlAttribute('body', 'data-kt-app-layout', 'dark-header');
        addHtmlAttribute('body', 'data-kt-app-header-fixed', 'true');
        addHtmlAttribute('body', 'data-kt-app-toolbar-enabled', 'true');

        addHtmlClass('body', 'app-default');
    }

    public function initLightHeaderLayout()
    {
        addHtmlAttribute('body', 'data-kt-app-layout', 'light-header');
        addHtmlAttribute('body', 'data-kt-app-header-fixed', 'true');
        addHtmlAttribute('body', 'data-kt-app-toolbar-enabled', 'true');

        addHtmlClass('body', 'app-default');
    }

}
