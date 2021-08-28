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
            ->where("employees.id_level", $id)
            ->select("level.basic_salary")->get();

        foreach ($emp as $empl) {
            $basic_salary = $empl->basic_salary;
            // dd($basic_salary);
            // lấy check in check out từng nhân viên 
            $timeKeeping = ModelsTimekeeping::where("id_employee", '=', '$id_emp')
                //  ->where(MONTH('checkin'), '=', $month)
                //  ->where(YEAR('checkin'), '=', $year)
                ->get();
            foreach ($timeKeeping as $date) {
                if ($date) {
                }
            }
            // lấy ngày nghỉ từng nhân viên 
            $legal_off = LegalOff::where('id_employee', '=', $id_emp)
                // ->where(MONTH('start_time'), '=', $month)
                // ->where(YEAR('start_time'), '=', $year)
                ->count();

            // tìm số ngày của tháng đó
            //$date = số ngày công chuẩn = số ngày tháng đó - (t7+cn tháng đó)
            //kiểm tra từng ngày 1 của tháng đó
            // nghỉ có lương: nghỉ có phép + nghỉ lễ, nếu nghỉ lễ trùng t7,cn->nghỉ bù trong tháng đấy 
            // nghỉ trừ lương: k checkin out, k đc duyệt nghỉ
            // nghỉ k lương:thứ 7 cn 


            /* 
                check h :đếm check in >8h||check out >5h30 -20k
                 check in >8h -20k, check in <8hh ->check đúng
                 check out >5h30 -20k, check out >5h30->check đúng
            */
            //$date1 = đếm số ngày nv đi lm trong tháng đó

            // lương = $basic_salary / $date * $date1

            // Hiển thị ra 'view/salary/list'
        }
    }
}
