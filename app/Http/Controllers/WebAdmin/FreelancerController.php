<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFreelancerRequest;
use App\Services\FreelancerService;

class FreelancerController extends Controller
{
    private $service;

    public function __construct(FreelancerService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Freelancer";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/freelancer.freelancer', compact('title', 'data'));
    }

    public function store(StoreFreelancerRequest $request)
    {
        $_data = array_merge($request->validated());
        $_data = $this->service->create($_data);

        return redirect()
            ->route('freelancer.index')
            ->with('success', $this->message::afterInsert(true));
    }

}
