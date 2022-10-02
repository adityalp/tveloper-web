<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TeamService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Team';

    function beforeUpdate($data)
    {
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }

    /**
     * Override from base-class
     */
    function create($data) {
        DB::beginTransaction();
        try {
            $_fName = time() . '_' . $data['path']->getClientOriginalName();
            $_fPath = $data['path']->storeAs('/uploads/team', $_fName, ['disk' => 'local']);

            $data['slug'] = Str::slug($data['name']);
            $data['path'] = $_fPath;
            $_data = $this->getModel()::create($data);

            DB::commit();
            return $_data;
        } catch(\Exception $e) {
            DB::rollBack();
        }

        return null;
    }
    function destroy($key) {
        $_data = $this->getModel()::findOrFail($key);

        if (File::exists(public_path($_data->photo))) 
            File::delete(public_path($_data->photo));

        $_data->delete();
        return $_data;
    }
    
    /**
     * custom logic goes here ...
     */
    function updateFile($key, $data) {
        $_data = $this->getModel()::findOrFail($key);

        if (File::exists(public_path($_data->photo)))
            File::delete(public_path($_data->photo));

        $_fName = time() . '_' . $data->getClientOriginalName();
        $_fPath = $data->storeAs('/uploads/team', $_fName, ['disk' => 'local']);
        $_data->photo = $_fPath;
        $_data->save();

        return $_data;
    }
}
