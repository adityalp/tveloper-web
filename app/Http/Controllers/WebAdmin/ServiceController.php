<?php

namespace App\Http\Controllers\WebAdmin;

use App\Services\Service;
use Illuminate\Http\Request;
use App\Utils\StorageFirebase;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

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

    public function store(StoreServiceRequest $request)
    {
        $_photo = $request->file('icon');
        $_data = array_merge($request->validated(), ['icon' => $_photo]);
        $_data = $this->service->create($_data);

        $d = StorageFirebase::getInstance();
        $d->store("service", $_photo);

        return redirect()
            ->route('service.index')
            ->with('success', $this->message::afterInsert(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', $this->message::afterDestroy(true));
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('service.index')->with('success', $this->message::afterUpdate(true));
    }   
    
    public function update_icon(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'icon' => 'mimes:jpg,jpeg,png|required|max:50000',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
        }

        $_data = $this->service->updateFile($id, $request->file('icon'));
        return redirect()->route('service.index')->with('success', $this->message::afterUpdate(true));
    }
      
}
