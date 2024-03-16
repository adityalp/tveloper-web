<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;
use Illuminate\Support\Str;

class CategoryService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Category';

    function beforeCreate($data)
    {
        $data['slug'] = Str::slug($data['title']);
        return $data;
    }
    function beforeUpdate($data)
    {
        $data['slug'] = Str::slug($data['title']);
        return $data;
    }
}
