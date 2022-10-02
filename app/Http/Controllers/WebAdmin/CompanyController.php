<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyRequest;
use App\Services\CompanyService;
use App\Utils\Message;

class CompanyController extends Controller
{
    private $service;

    public function __construct(CompanyService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Company";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/company.company', compact('title', 'data'));
    }

    public function show()
    {
        $title = "Company";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/company.company', compact('title', 'data'));
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('company.index')->with('success', Message::afterUpdate(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy(['id', $id]);
        return back()->with('success', Message::afterDestroy(true));
    }


}
