<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Exception;

class UserAuthenticateController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $user = Employee::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('id', $user->id_employee);
            return view('user.index');
        } catch (Exception $e) {
            return view('user.login');
        }
    }
}
