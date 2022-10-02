<?php

namespace App\Http\Controllers;

use App\Utils\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Base attributes for every controller
     */
    protected $message;
    protected $params = [
        'page' => 10
    ];

    public function __construct()
    {
        $this->message = Message::getInstance();        
    }
}
