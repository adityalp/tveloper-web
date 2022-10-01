<?php

namespace App\Services\Base;

use App\Services\Base\BaseServiceProvider;

abstract class BaseServiceAbstract implements BaseServiceProvider {
    private $_modelImp;
    protected $model;

    function getModel() {
        $this->_modelImp = app('App\Models\\' . $this->model);
        return $this->_modelImp;
    }
}