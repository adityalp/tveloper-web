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
        $this->service = $service;
    }
    
    public function index()
    {
        $title = "Team";
        $data = $this->service->get(null);

        return view('web-admin/pages/team.team', compact('title', 'data'));
    }

    public function store(StoreTeamRequest $request)
    {
        $_photo = $request->file('path');
        $_data = array_merge($request->all(), ['path' => $_photo]);
        $_data = $this->service->create($_data);

        return redirect()->route('team.index')
            ->with('success', 'Inserted Successfully ..');
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->all());
        return redirect()->route('team.index')->with('success', 'Updated Successfully ..');
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
        return redirect()->route('team.index')->with('success', 'Updated Successfully ..');
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', 'Deleted Successfully ..');
    }

}
