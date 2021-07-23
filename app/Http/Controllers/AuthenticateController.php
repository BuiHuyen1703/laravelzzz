<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use PhpParser\Node\Stmt\TryCatch;

class AuthenticateController extends Controller
{

    public function __construct()
    {
        // cái này có nghĩa là nếu là khách mới được đăng nhập, cái middleware này chỉ không áp dụng cho trường hợp logout
        $this->middleware('isGuest')->except('logout');
    }

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
            $request->session()->put('user', $admin);

            return Redirect::route('dashboard');
        } catch (Exception $e) {
            return Redirect::route('login')->with('error', 'Tài khoản hoặc mật khẩu sai');
        }
    }

    public function loginEmployeeProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $employee = Employee::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('user', $employee);
            return Redirect::route('user');
        } catch (Exception $e) {
            return Redirect::route('login')->with('error', 'Sai gòiiiii');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login');
    }
}
