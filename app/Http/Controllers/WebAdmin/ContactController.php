<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    private $service;

    public function __construct(ContactService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Contact";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/contact.contact', compact('title', 'data'));
    }

    public function store(StoreContactRequest $request)
    {
        $_data = array_merge($request->validated());
        $_data = $this->service->create($_data);

        return redirect()
            ->route('contact.index')
            ->with('success', $this->message::afterInsert(true));
    }

    public function update(UpdateContactRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('contact.index')->with('success', $this->message::afterUpdate(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', $this->message::afterDestroy(true));
    }
}
