<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Services\PortfolioService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $service;

    public function __construct(PortfolioService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Portfolio";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/portfolio.portfolio', compact('title', 'data'));
    }
}
