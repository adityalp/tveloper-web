<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        $title = "Company";
        $data = Company::all();

        return view('web-admin/pages/company.company', compact('title', 'data'));
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
        }

        $data = Company::findOrFail($id);
        $data->name = $request->name;
        $data->location = $request->location;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();

        return redirect()->route('company.index')->with('success', 'Updated Successfully ..');
    }

    public function destroy($id)
    {
        $data = Company::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Deleted Successfully ..');
    }


}
