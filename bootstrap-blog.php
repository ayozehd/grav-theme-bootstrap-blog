<?php

namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

class BootstrapBlog extends Theme
{

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0]
        ];
    }

    /**
     * Get Taxonomies on item selector
     * @static
     */
    public static function getTaxonomies()
    {
        $config = Grav::instance()['config']->get('site.taxonomies') ?: [];
        return array_combine($config, $config);
    }

    /**
     * Initialize configuration
     */
    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            return;
        }

        if ($this->config->get('themes.bootstrap-blog.enabled')) {
            $this->enable([
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
            ]);
        }

    }

    /**
     * if enabled on this page, load the JS + CSS and set the selectors.
     */
    public function onTwigSiteVariables()
    {
        $config = $this->config->get('themes.bootstrap-blog');

        $collection = [];

        if ($config['cdn_enabled']) {
            // CSS
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css';
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap-reboot.min.css';
            $collection[] = 'https://use.fontawesome.com/releases/v5.3.1/css/all.css';
            $collection[] = 'https://use.fontawesome.com/releases/v5.3.1/css/brands.css';
            // JS
            $collection[] = 'https://code.jquery.com/jquery-3.2.1.slim.min.js';
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js';
            $collection[] = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js';
        } else {

            $collection[] = 'theme://assets/css-compiled/bootstrap/bootstrap.css';
            $collection[] = 'theme://assets/css-compiled/bootstrap/bootstrap-reboot.css';
            $collection[] = 'theme://assets/css/fontawesome.min.css';
            $collection[] = 'theme://assets/css/solid.min.css';
            $collection[] = 'theme://assets/css/regular.min.css';
            $collection[] = 'theme://assets/css/brands.min.css';
            $collection[] = 'theme://assets/js/popper.min.js';
            $collection[] = 'theme://assets/js/bootstrap.min.js';

        }

        $assets = $this->grav['assets'];
        $assets->registerCollection('bootstrap-blog', $collection);
        $assets->add('bootstrap-blog', 100);

    }
}
