<?php

namespace App\Services\Interfaces;

interface BaseServiceProvider {
    function get($params);
    function create($data);
    function update($key, $data);
    function destroy($key);
}