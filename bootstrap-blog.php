<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use Grav\Common\Grav;

class BootstrapBlog extends Theme
{
    public static function getTaxonomies()
    {
        $config = Grav::instance()['config']->get('site.taxonomies') ?: [];
        return array_combine($config, $config);
    }
}
