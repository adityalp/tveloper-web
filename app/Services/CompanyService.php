<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Company;
use App\Services\Base\BaseServiceProvider;

class CompanyService implements BaseServiceProvider
{
    //
    private $model = Company::class;
    function get($params) {
        $_data = $this->model::paginate(10);
        return $_data;
    }
    function create($data) {
        // re-map here
        $data['slug'] = Str::slug($data['title']);

        $_data = $this->model::create($data);
        return $_data;
    }
    function update($key, $data) {        
        $_data = $this->model::where($key[0], $key[1])->update($data);
        return $_data;
    }
    function destroy($key) {
        $_data = $this->model::findOrFail($key);
        $_data->delete();

        return $_data;
    }
}
