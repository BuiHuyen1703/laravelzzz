<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listAdmin = Admin::all();
        return view('admin.list', [
            "listAdmin" => $listAdmin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameAdmin = $request->get('name_admin');
        $phoneAdmin = $request->get('phone_admin');
        $emailAdmin = $request->get('email_admin');
        $passAdmin = $request->get('pass_admin');
        $roleAdmin = $request->get('role_admin');
        $admin = new Admin();
        $admin->name_admin = $nameAdmin;
        $admin->phone_admin = $phoneAdmin;
        $admin->email_admin = $emailAdmin;
        $admin->pass_admin = $passAdmin;
        $admin->role = $roleAdmin;
        $admin->save();
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', [
            "admin" => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name_admin');
        $phone = $request->get('phone_admin');
        $email = $request->get('email_admin');
        $pass = $request->get('pass_admin');
        $role = $request->get('role');
        $admin = Admin::find($id);
        $admin->name_admin = $name;
        $admin->phone_admin = $phone;
        $admin->email_admin = $email;
        $admin->pass_admin = $pass;
        $admin->role = $role;
        $admin->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('id_admin', $id)->delete();
        return redirect(route('admin.index'));
    }
}
