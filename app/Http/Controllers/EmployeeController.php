<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use App\Models\Department;
use App\Models\Employee;
use App\Models\JobTitle;
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
        $idDep = $request->get('id-dep');
        $listDepa = Department::all();

        $listEmp = Employee::join("level", "employees.level", "=", "level.id_level")
            ->join("departments", "employees.id_department", "=", "departments.id_department")
            ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
            // ->select("employees.*", "departments.name_department", "jobtitle.name_jobTitle")
            ->where("employees.id_department", $idDep)
            ->where("employees.available", "=", 1)
            ->where('name_empployee', 'like', "%$search%")
            ->paginate(5);
        // 

        return view('employee.list', [
            'listEmp' => $listEmp,
            'search' => $search,
            'listDepa' => $listDepa,
            'idDep' => $idDep,
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
        $listJob = JobTitle::all();
        $listDep = Department::all();
        $employee = Employee::find($id);
        return view('employee.edit', [
            "employee" => $employee,
            'listDep' => $listDep,
            'listJob' => $listJob,
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
        $name = $request->get('name_emp');
        $salaryperhouse = $request->get('salaryperhouse');
        $date = $request->get('dateOfBirth');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $email = $request->get('email');
        $level = $request->get('level');
        $dep = $request->get('id_department');
        $job = $request->get('id_jobTitle');
        $employee = Employee::find($id);
        $employee->name_empployee = $name;
        $employee->dateOfBirth = $date;
        $employee->gender = $gender;
        $employee->phoneNumber = $phone;
        $employee->address = $address;
        $employee->email = $email;
        $employee->level = $level;
        $employee->salaryPerHour = $salaryperhouse;
        $employee->id_department = $dep;
        $employee->id_jobTitle = $job;
        $employee->save();
        return redirect()->route('employee.index');
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

    public function showDetail($id)
    {
        return view('employee.detail');
    }
}
