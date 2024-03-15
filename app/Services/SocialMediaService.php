<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Services\Base\BaseServiceAbstract;

class SocialMediaService extends BaseServiceAbstract
{
    // define model here as string
    protected $model = 'SocialMedia';

    function beforeCreate($data)
    {
        $data['icon'] = $data['tmp'];
        return $data;
    }
   

      /**
     * Override from base-class
     */
    function create($data) {
        DB::beginTransaction();
        try {
            $_fName = time() . '_' . $data['icon']->getClientOriginalName();
            $_fPath = $data['icon']->storeAs('/uploads/socials', $_fName, ['disk' => 'local']);
            $_data = $data['tmp'] = $_fPath;
            // override from base-class
            $data = $this->appendUuid($data);
            $data = $this->beforeCreate($data);
            $_data = $this->getModel()::create($data);

            DB::commit();
            return $_data;
        } catch(\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    
    function destroy($key) {
        $_data = $this->getModel()::findOrFail($key);

        if (File::exists(public_path($_data->icon)))
            File::delete(public_path($_data->icon));

        $_data->delete();
        return $_data;
    }

    /**
     * custom logic goes here ...
     */
    function updateFile($key, $data) {
        $_data = $this->getModel()::findOrFail($key);

        if (File::exists(public_path($_data->icon)))
            File::delete(public_path($_data->icon));

        $_fName = time() . '_' . $data->getClientOriginalName();
        $_fPath = $data->storeAs('/uploads/socials', $_fName, ['disk' => 'local']);
        $_data->icon = $_fPath;
        $_data->save();

        return $_data;
    }
}
