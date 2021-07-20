<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $listEmp = Employee::join("level", "employees.level", "=", "level.id_level")
            ->join("departments", "employees.id_department", "=", "departments.id_department")
            ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
            // ->select("employees.*", "departments.name_department", "jobtitle.name_jobTitle")
            ->where("employees.available", "=", 1)
            ->where('name_empployee', 'like', "%$search%")
            ->paginate(5);
        return view('employee.list', [
            'listEmp' => $listEmp,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $salaryperhour = $request->get('salaryperhouse');
        $employee = new employee();
        $employee->name_empployee = $name;
        $employee->salaryPerHour = $salaryperhour;
        $employee->save();
        return redirect(route('employee.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::join("departments", "employees.id_department", "=", "departments.id_department")
            ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
            ->find($id);
        return view('employee.show', [
            "employee" => $employee
        ]);
        //join cho t cái phòng ban với chức vụ
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', [
            "employee" => $employee
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
        // $name = $request->get('name');
        // $salaryperhouse = $request->get('salaryperhouse');
        // $employee = Employee::find();
        // $employee->name_empployee = $name;
        // $employee->salaryPerHour = $salaryperhouse;
        // $employee->save();
        // return redirect()->route('employee.index');
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
    public function insertExcel()
    {
        return view('employee.insert-excel');
    }
    public function insertExcelProcess(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file('excel'));
    }
}
