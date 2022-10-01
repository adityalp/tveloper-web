<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyRequest;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    private $service;
    public function __construct(CompanyService $service) {
        $this->service = $service;
    }

    public function index()
    {
        $title = "Company";
        $data = $this->service->get(null);

        return view('web-admin/pages/company.company', compact('title', 'data'));
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->all());
        return redirect()->route('company.index')->with('success', 'Updated Successfully ..');
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy(['id', $id]);
        return back()->with('success', 'Deleted Successfully ..');
    }


}
