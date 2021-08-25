<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LegalOff;
use App\Models\SalaryDetail as ModelsSalaryDetail;
use App\Models\Timekeeping as ModelsTimekeeping;
use Carbon\Carbon;
use Illuminate\Http\Request;


class SalaryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSalary = ModelsSalaryDetail::get();
        return view('salary.list', [
            "listSalary" => $listSalary,
        ]);
    }


    public function detail($id)
    {
        $month = Carbon::now()->month; //tháng hiện tại
        $year = Carbon::now()->year; //năm hiện tại
        $id_emp = $id;
        $emp = Employee::join("level", "employees.level", "=", "level.id_level")
            // ->where("employees.id_level", $id)
            ->select("level.basic_salary")->get();
        // dd($basicSalary);
        foreach ($emp as $empl) {
            $basic_salary = $empl->basic_salary;
            // lấy check in check out từng nhân viên 
            $timeKeeping = ModelsTimekeeping::where("id_employee", '=', '$id_emp')
                // ->where(MONTH(checkin), '=', $month)
                // ->where(YEAR(checkin), '=', $year)
                ->get();


            $legal_off = LegalOff::where('id_employee', '=', $id_emp)
                // ->where(MONTH(start_time), '=', $month)
                // ->where(YEAR(start_time), '=', $year)
                ->count();
        }
    }
}
