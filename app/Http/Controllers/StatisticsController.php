<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Timekeeping;
use Illuminate\Http\Request;
use App\Models\SalaryDetail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Exports\TimeExportMultiple;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        $date0 = date_create($request->get('date'));  // $date1 = getdate($date);
        $datedaye = date_format($date0, "m-Y");
        // echo $datedaye;
        // echo $date;
        $year2 = date_format($date0, "Y");

        $month2 = date_format($date0, "m");

        $listDep = Department::all();
        $idDep = $request->get('id-dep');
        if ($idDep == 0) {
            $idEmp = Employee::join("level", "employees.level", "=", "level.id_level")
                ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
                ->join("salary_detail", "employees.id_employee", "=", "salary_detail.id_employee")
                ->whereMonth("fromdate", "=", $month2)
                ->whereYear("fromdate", "=", $year2)
                ->get();
        } else {
            $idEmp = Employee::join("level", "employees.level", "=", "level.id_level")
                ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
                ->join("salary_detail", "employees.id_employee", "=", "salary_detail.id_employee")
                ->whereMonth("fromdate", "=", $month2)
                ->whereYear("fromdate", "=", $year2)
                ->where("employees.id_department", "=", $idDep)
                ->get();
        }

        $count = 0;
        $j = 0;
        $array[] = null;


        //SELECT COUNT(phat) FROM timekeeping WHERE id_employee = 1 and month(date) ='08' AND phat != 0
        foreach ($idEmp as $id) {
            $idEmp = $id->id_employee;
            $month = date_create($id->date);
            $month1 = date_format($month, "m");
            // dd($month1);
            $year1 = date_format($month, "Y");
            $count = Timekeeping::where('id_employee', '=', $idEmp)
                ->whereMonth('date', "=", $month1)
                ->whereYear('date', "=", $year1)
                ->where('phat', "!=", 0)
                ->count();

            $list = [
                'id_employee' => $id->id_employee,
                'ten_nv' => $id->name_empployee,
                'salary_basic' => $id->basic_salary,
                'job_title' => $id->name_jobTitle,
                'salary' => $id->salary,
                'phat' => $count,
            ];
            $array[$j++] = $list;
        }



        return view('index', [
            // "listSalary" => $listSalary,
            'idDep' => $idDep,
            'listDep' => $listDep,
            'idEmp' => $array,
            'date' => $datedaye
        ]);
    }

    public function show($id)
    {
    }

    public function create(Request $request)
    {
        $date0 = date_create($request->get('date'));  // $date1 = getdate($date);
        // echo $date;
        $year2 = date_format($date0, "Y");

        $month2 = date_format($date0, "m");
        $idDep = $request->get('id-dep');
        $listDep = Department::all();

        $idEmp = Employee::join("level", "employees.level", "=", "level.id_level")
            ->join("jobtitle", "employees.id_jobTitle", "=", "jobtitle.id_jobTitle")
            ->join("salary_detail", "employees.id_employee", "=", "salary_detail.id_employee")
            ->whereMonth("fromdate", "=", $month2)
            ->whereYear("fromdate", "=", $year2)
            // ->where("employees.id_department", $idDep)
            ->sum('salary');

        $salary = DB::table('employees')
            ->join('level', 'employees.level', '=', 'level.id_level')
            ->sum('basic_salary');

        $phat = $salary - $idEmp;
        // dd($idEmp);
        return view('thongke', [
            'idEmp' => $idEmp,
            'salary' => $salary,
            'phat' => $phat
        ]);
    }


    public function export(Request $request)
    {
        $request->validate([
            'year' => "required",
            'month' => "required"
        ]);

        return (new TimeExportMultiple($request->year, $request->month))->download('time_' . time() . '.xlsx');
    }
}
