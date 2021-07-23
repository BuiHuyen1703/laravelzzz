<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use PhpParser\Node\Stmt\TryCatch;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $admin = Admin::where('email_admin', $email)->where('pass_admin', $password)->firstOrFail();
            $request->session()->put('id', $admin->idAdmin);
            return Redirect::route('dashboard');
        } catch (Exception $e) {
            return Redirect::route('login')->with('error', 'Tài khoản hoặc mật khẩu sai');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login');
    }
}
