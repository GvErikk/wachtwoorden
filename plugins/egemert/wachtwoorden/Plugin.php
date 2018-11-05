<?php namespace EGemert\Wachtwoorden;

use Backend;
use System\Classes\PluginBase;

/**
 * Wachtwoorden Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Wachtwoorden',
            'description' => 'No description provided yet...',
            'author'      => 'EGemert',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'EGemert\Wachtwoorden\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'egemert.wachtwoorden.some_permission' => [
                'tab' => 'Wachtwoorden',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'wachtwoorden' => [
                'label'       => 'Wachtwoorden',
                'url'         => Backend::url('egemert/wachtwoorden/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['egemert.wachtwoorden.*'],
                'order'       => 500,
            ],
        ];
    }
}
