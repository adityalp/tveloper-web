<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;

class Service extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Service';

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
