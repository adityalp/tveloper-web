<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
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
    
    public function store(StorePortfolioRequest $request)
    {
        $_data = array_merge($request->validated());
        $_data = $this->service->create($_data);

        return redirect()
            ->route('portfolio.index')
            ->with('success', $this->message::afterInsert(true));
    }
}
