<?php namespace Cms\Modules\:module_name\Providers;

use Cms\Modules\Core\Providers\BaseModuleProvider;

class :module_nameModuleServiceProvider extends BaseModuleProvider
{

    /**
     * Register the defined middleware.
     *
     * @var array
     */
    protected $middleware = [
        ':module_name' => [
        ],
    ];

    /**
     * The commands to register.
     *
     * @var array
     */
    protected $commands = [
        ':module_name' => [
        ],
    ];

    /**
     * Register repository bindings to the IoC
     *
     * @var array
     */
    protected $bindings = [

    ];

    /**
     * Register Auth related stuffs
     */
    public function register()
    {
        parent::register();

    }

}
