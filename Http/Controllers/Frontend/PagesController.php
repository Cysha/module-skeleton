<?php namespace Cms\Modules\%module_name\Http\Controllers\Frontend;

class PagesController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }


}
