<?php namespace MichielVanHaute\EnvironmentPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Twig_Environment;
use Twig_NodeVisitorInterface;

class EnvironmentPlugin extends Plugin
{

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('env', function($key) {
                return env($key);
            }),

        ];
    }


}
