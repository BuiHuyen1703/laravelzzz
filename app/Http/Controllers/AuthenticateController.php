<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{

    public function loginAdmin()
    {
        return view('login');
    }

    public function loginProcessAdmin(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $admin = Admin::where('email_admin', $email)->where('pass_admin', $password)->firstOrFail();
            $request->session()->put('user', $admin);

            return Redirect::route('dashboard');
        } catch (Exception $e) {
            return Redirect::route('login-admin')->with('error', 'Tài khoản hoặc mật khẩu sai');
        }
    }
    //admin
    public function logoutAdmin(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login-admin');
    }
    //user
    public function loginUser()
    {
        return view('user.login');
    }

    public function loginProcessUser(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $user = Employee::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('id_employee', $user->id_employee);
            return Redirect::route('userIndex');
        } catch (Exception $e) {
            return Redirect::route('login-user')->with('error', 'Sai tài khoản hoặc mật khẩu ');
        }
    }

    public function logoutUser(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login-user');
    }
}
