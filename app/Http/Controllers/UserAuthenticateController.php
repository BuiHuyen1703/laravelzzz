<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthenticateController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function loginProcess(Request $request)
    {
        return $request;
    }
}
