<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;
use Illuminate\Support\Str;

class CompanyService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Company';
    
    function get($params) {
        $_data = $this->getModel()::paginate($params['page']);
        return $_data;
    }
    function create($data) {
        // re-map here
        $data['slug'] = Str::slug($data['title']);

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
