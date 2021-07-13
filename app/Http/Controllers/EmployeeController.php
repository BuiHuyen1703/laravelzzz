<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listEmp = DB::table("employees")
            ->join("level", "employees.level", "=", "level.id_level")
            ->join("departments", "employees.id_department", "=", "departments.id_department")
            ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
            ->select("employees.*", "departments.name_department", "jobtitle.name_jobTitle")
            ->where("employees.available", "=", 1)
            ->get();
        return view('employee.list', [
            'listEmp' => $listEmp
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hide($id)
    {
        $legalOff = DB::table("legal_off")
            ->where("id_employee", "=", $id)
            ->update(["available" => 0]);
        $Timekeep = DB::table("timekeeping")
            ->where("id_employee", "=", $id)
            ->update(["available" => 0]);
        $Emp = DB::table("employees")
            ->where("id_employee", "=", $id)
            ->update(["available" => 0]);
        return redirect("employee");
    }
}
