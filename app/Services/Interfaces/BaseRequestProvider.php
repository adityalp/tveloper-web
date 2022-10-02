<?php

namespace App\Services\Interfaces;

interface BaseRequestProvider {
    function beforeCreate($data);
    function beforeUpdate($data);
    function afterCreate($data);
    function afterUpdate($data);
}