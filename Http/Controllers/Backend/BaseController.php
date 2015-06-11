<?php namespace Cms\Modules\%module_name\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;

class BaseController extends BaseBackendController
{

    public function boot()
    {
        parent::boot();

        $this->theme->setTitle('%module_name_lower');
    }

}
