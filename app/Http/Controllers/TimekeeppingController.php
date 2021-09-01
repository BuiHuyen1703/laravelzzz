<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LegalOff;
use App\Models\Timekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Datetime;

class TimekeeppingController extends Controller
{

    public function index()
    {
        $listTime = Timekeeping::join("employees", "employees.id_employee", "=", "timekeeping.id_employee")
            ->where("timekeeping.available", "=", 1)
            ->orderBy('employees.id_employee', 'asc')
            ->paginate(5);
        return view('timekeeping.list', [
            "listTime" => $listTime
        ]);
    }
    // k check -> admin check rồi insert vào cột phạt 100k-> nghỉ k phép
    public function check()
    {
        $listTime = Timekeeping::join("employees", "employees.id_employee", "=", "timekeeping.id_employee")
            ->where("timekeeping.available", "=", 1)
            ->orderBy('employees.id_employee', 'asc')
            ->paginate(5);


        $id_emp = Employee::all();
        foreach ($id_emp as $id) {
            $daynow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $idEmp = $id->id_employee;
            $checkID = Timekeeping::where('id_employee', '=', $idEmp)
                ->where('date', '=', $daynow)
                ->select('id_employee')
                ->first();
            if ($checkID === null) {
                //so sánh ngày vs bảng nghỉ
                $sql = LegalOff::where('id_employee', '=', $idEmp)
                    ->where('approve', '=', 1)
                    ->where('available', '=', 1)
                    ->where('strat_time_off', '<=', $daynow)
                    ->where('end_time_off', '>=', $daynow)
                    ->first();
                if ($sql === null) {
                    $sql1 = Timekeeping::create([
                        'id_employee' => $idEmp,
                        'date' => $daynow,
                        'phat' => 100,
                    ]);
                }
            } else {
                //$check = "SELECT `timekeeping`.`id_employee`  FROM `timekeeping` WHERE Date ='$date' and id_employee = $id_employee 
                // and checkout IS NULL" ;(fisrt )
                $check = Timekeeping::where([
                    'id_employee' => $idEmp,
                    'date' => $daynow,
                    'checkout' => null,
                ])->first();
                if ($check === null) {
                    $sql2 = Timekeeping::create([
                        'id_employee' => $idEmp,
                        'date' => $daynow,
                        'phat' => 20,
                    ]);
                }
            }
        }
        return view('timekeeping.list', [
            'listTime' => $listTime,
        ]);
    }

    public function create()
    {
        $mydate = new DateTime();
        $mydate->modify('+7 hours');
        $curendtDate = $mydate->format('Y-m-d');

        $check = DB::table("timekeeping")
            ->where("date", "=", $curendtDate)
            ->get();
        return view('user.index', ["checks" => $check]);
    }


    public function store(Request $request)
    {
        $checkout = null;
        $idEmp = $request->get('id_employee');

        $checkin = $request->get('checkin');
        $date = $request->get('date');
        $available = $request->get('available');

        $mydate = new DateTime();
        $mydate->modify('+7 hours');
        $curendtDate = $mydate->format('Y-m-d');
        $phat = 0;

        if ((float)$checkin > 8) {
            $phat = 20;
        }
        $timekeeping = new Timekeeping();
        $timekeeping->id_employee = $idEmp;
        $timekeeping->checkin = $checkin;
        $timekeeping->checkout = $checkout;
        $timekeeping->date = $date;
        $timekeeping->available = $available;
        $timekeeping->phat = $phat;
        $timekeeping->save();

        return redirect(route('userIndex'));
    }

    public function checkin(Request $request)
    {
        // $idEmp = $request->get('id_employee');
        // return $idEmp;
        // $checkin = $request->get('checkin');
        // $date = $request->get('date');
        // $available = $request->get('available');
        // //insert
        // $che = DB::table("timekeeping")
        //     ->insert([
        //         "checkin" => $checkin,
        //         "avalable" => $available,
        //         "date" => $date
        //     ]);


        // return $che;
        // if ($che === null) {
        //     $sql3 = Timekeeping::create([
        //         'id_employee' => $idEmp,
        //         'date' => $date,
        //         'phat' => 20,
        //     ]);
        // }
        // return redirect(route('userIndex'));
    }

    // public function checkout()
    // {
    //     //update
    // }


    public function edit($id)
    {
        $timekeeping = Timekeeping::find($id);
        return view('user.index', [
            "timekeeping" => $timekeeping
        ]);
    }


    // public function update(Request $request, $id)
    // {
    //     $id_emp = $request->get('id_emp');
    //     $checkin = $request->get('checkin');
    //     $checkout = $request->get('checkout');
    //     $date = $request->get('date');
    //     $available = $request->get('available');
    //     $timekeeping = Timekeeping::find($id);
    //     $timekeeping->id_employee = $id_emp;
    //     $timekeeping->checkin = $checkin;
    //     $timekeeping->checkout = $checkout;
    //     $timekeeping->date = $date;
    //     $timekeeping->available = $available;
    //     $timekeeping->save();
    //     return redirect()->route('userIndex');
    // }

    public function hide($id)
    {

        $Dep = DB::table("timekeeping")
            ->where("id_timekipping", "=", $id)
            ->update(["available" => 0]);
        return redirect("timekeeping");
    }
}
