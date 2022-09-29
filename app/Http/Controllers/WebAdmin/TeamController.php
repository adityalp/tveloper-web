<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $title = "Team";
        $data = Team::all();

        return view('web-admin/pages/team.team', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|required|max:50000',
        ]);

        if ($validate->fails())
            return back()->withErrors($validate->errors());

        $photo = $request->file('photo');
        $data = $request->all();

        DB::beginTransaction();
        try {
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $filePath = $photo->store('/uploads/team', ['disk' => 'local']);

            Team::insert([
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'photo' => $filePath,
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return redirect()->route('team.index')
            ->with('success', 'Inserted Successfully ..');
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name_updt' => 'required',
            'position_updt' => 'required',
            'description_updt' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
        }

        $data = Team::findOrFail($id);
        $data->name = $request->name_updt;
        $data->position = $request->position_updt;
        $data->description = $request->description_updt;
        $data->save();

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

        $data = Team::findOrFail($id);

        if (File::exists(public_path($data->photo)))
            File::delete(public_path($data->photo));

        $photo = $request->file('photo_updt');
        $filePath = $photo->store('/uploads/team', ['disk' => 'local']);

        $data->photo = $filePath;
        $data->save();

        return redirect()->route('team.index')->with('success', 'Updated Successfully ..');
    }

    public function destroy($id)
    {
        $data = Team::findOrFail($id);

        if (File::exists(public_path($data->photo)))
            File::delete(public_path($data->photo));

        $data->delete();

        return back()->with('success', 'Deleted Successfully ..');
    }

}
