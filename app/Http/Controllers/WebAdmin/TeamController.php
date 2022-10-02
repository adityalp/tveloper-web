<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Services\TeamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    private $service;

    public function __construct(TeamService $service) {
        parent::__construct();
        $this->service = $service;
    }
    
    public function index()
    {
        $title = "Team";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/team.team', compact('title', 'data'));
    }

    public function store(StoreTeamRequest $request)
    {
        $_photo = $request->file('path');
        $_data = array_merge($request->validated(), ['path' => $_photo]);
        $_data = $this->service->create($_data);

        return redirect()
            ->route('team.index')
            ->with('success', $this->message::afterInsert(true));
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('team.index')->with('success', $this->message::afterUpdate(true));
    }

    public function update_photo(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'photo_updt' => 'mimes:jpg,jpeg,png|required|max:50000',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
        }

        $_data = $this->service->updateFile($id, $request->file('photo_updt'));
        return redirect()->route('team.index')->with('success', $this->message::afterUpdate(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', $this->message::afterDestroy(true));
    }

}
