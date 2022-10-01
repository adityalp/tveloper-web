<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;
use Illuminate\Support\Str;

class CompanyService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Company';
    
    function create($data) {
        // re-map here
        $data['slug'] = Str::slug($data['title']);

        $_data = $this->getModel()::create($data);
        return $_data;
    }
}
