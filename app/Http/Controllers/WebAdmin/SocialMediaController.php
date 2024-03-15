<?php

namespace App\Http\Controllers\WebAdmin;

use Illuminate\Http\Request;
use App\Utils\StorageFirebase;
use App\Http\Controllers\Controller;
use App\Services\SocialMediaService;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Http\Requests\UpdateSocialMediaRequest;

class SocialMediaController extends Controller
{
    private $service;

    public function __construct(SocialMediaService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Social Media";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/socialmedia.socialmedia', compact('title', 'data'));
    }

    public function store(StoreSocialMediaRequest $request)
    {
        $_photo = $request->file('icon');
        $_data = array_merge($request->validated(), ['icon' => $_photo]);
        $_data = $this->service->create($_data);

        $d = StorageFirebase::getInstance();
        $d->store("socials", $_photo);

        return redirect()
            ->route('socialmedia.index')
            ->with('success', $this->message::afterInsert(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', $this->message::afterDestroy(true));
    }

    
    public function update(UpdateSocialMediaRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('socialmedia.index')->with('success', $this->message::afterUpdate(true));
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
        return redirect()->route('socialmedia.index')->with('success', $this->message::afterUpdate(true));
    }

}
