<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Services\SocialMediaService;

class SocialMediaController extends Controller
{
    private $service;

    public function __construct(SocialMediaService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Social Media";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/socialmedia.socialmedia', compact('title', 'data'));
    }


}
