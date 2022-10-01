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

    /**
     * Override the base logic if needed
     */
    function get($params) {
        $_data = $this->getModel()::paginate($params['page']);
        return $_data;
    }
    function create($data) {
        $_data = $this->getModel()::create($data);
        return $_data;
    }
    function update($key, $data) {        
        $_data = $this->getModel()::where($key[0], $key[1])->update($data);
        return $_data;
    }
    function destroy($key) {
        $_data = $this->getModel()::findOrFail($key);
        $_data->delete();

        return $_data;
    }    
}