<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Exception;
use Illuminate\Support\Facades\Redirect;


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
            $request->session()->put('id_employee', $user->id_employee);
            return Redirect::route('userindex');
        } catch (Exception $e) {
            return Redirect::route('login')->with('error', 'Sai tài khoản hoặc mật khẩu ');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login');
    }
}
