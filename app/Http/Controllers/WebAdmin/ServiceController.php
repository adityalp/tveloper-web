<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Services\Service;

class ServiceController extends Controller
{
    private $service;

    public function __construct(Service $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Service";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/service.service', compact('title', 'data'));
    }


}
