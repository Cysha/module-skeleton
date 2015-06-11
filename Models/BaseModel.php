<?php namespace Cms\Modules\%module_name\Models;

use Cms\Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{

    public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.%module_name.config.table-prefix', '%module_name_');
        $this->table = $prefix.$this->table;
    }

}
