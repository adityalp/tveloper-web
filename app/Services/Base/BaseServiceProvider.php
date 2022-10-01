<?php

namespace App\Services\Base;

interface BaseServiceProvider {
    function get($params);
    function create($data);
    function update($key, $data);
    function destroy($key);
}