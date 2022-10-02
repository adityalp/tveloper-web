<?php

namespace App\Services\Base;

use App\Services\Interfaces\BaseRequestProvider;
use App\Services\Interfaces\BaseServiceProvider;
use Ramsey\Uuid\Uuid;

abstract class BaseServiceAbstract 
    implements BaseServiceProvider, BaseRequestProvider {

    private $_modelImp;
    protected $model;

    function getModel() {
        $this->_modelImp = app('App\Models\\' . $this->model);
        return $this->_modelImp;
    }
    function appendUuid($data) {
        $data['id'] = (String) Uuid::uuid4();
        return $data;
    }

    /**
     * format requests handlers
     */
    function beforeCreate($data) {
        return $data;
    }
    function beforeUpdate($data) {
        return $data;
    }
    function afterCreate($data) {
        return $data;
    }
    function afterUpdate($data) {
        return $data;
    }

    /**
     * Override the base logic if needed
     */
    function get($params) {
        $_data = $this->getModel()::paginate($params['page']);
        return $_data;
    }
    function create($data) {
        $_data = $this->appendUuid($data);
        $_data = $this->beforeCreate($_data);
        $_data = $this->getModel()::create($_data);
        $_data = $this->afterCreate($_data);
        return $_data;
    }
    function update($key, $data) {
        $_data = $this->beforeUpdate($data);
        $_data = $this->getModel()::where($key[0], $key[1])->update($_data);
        $_data = $this->afterUpdate($_data);
        return $_data;
    }
    function destroy($key) {
        $_data = $this->getModel()::findOrFail($key);
        $_data->delete();

        return $_data;
    }    
}