<?php

namespace App\Services;

use App\Services\Base\BaseServiceAbstract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TeamService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'Team';

    function get($params) {
        $_data = $this->getModel()::paginate(10);
        return $_data;
    }
    function create($data) {
        DB::beginTransaction();
        try {
            $_fName = time() . '_' . $data['path']->getClientOriginalName();
            $_fPath = $data['path']->storeAs('/uploads/team', $_fName, ['disk' => 'local']);

            $data['path'] = $_fPath;
            $_data = $this->getModel()::create($data);

            return $_data;
        } catch(\Exception $e) {
            DB::rollBack();
        }

        return null;
    }
    function update($key, $data) {        
        $_data = $this->getModel()::where($key[0], $key[1])->update($data);
        return $_data;
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
