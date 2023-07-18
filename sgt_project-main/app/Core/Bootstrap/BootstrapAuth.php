<?php

namespace App\Core\Bootstrap;

class BootstrapAuth
{
    public function init()
    {
        // See also starterkit/app/View/Components/SystemLayout.php to change the layout

        addHtmlClass('body', 'app-blank');
        addCssFile('assets/css/style.css');
        addCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    }
}
