<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function a()
    {
        return $this->sendResponse(200, null);
    }

    public function b()
    {
        return $this->sendResponse(200, null);
    }
}
