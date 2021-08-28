<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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


    public function create()
    {
        return view('user.index');
    }


    public function store(Request $request)
    {
        $checkin = $request->get('checkin');
        $checkout = $request->get('checkout');
        $date = $request->get('date');
        $available = $request->get('available');
        $timekeeping = new Timekeeping();
        $timekeeping->checkin = $checkin;
        $timekeeping->checkout = $checkout;
        $timekeeping->date = $date;
        $timekeeping->available = $available;
        // Timekeeping::create($request->all());
        return redirect(route('userIndex'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Timekeeping $timekeeping)
    {
        $timekeeping->update($request->all());
        return redirect()->route('userIndex');
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

        $Dep = DB::table("timekeeping")
            ->where("id_timekeeping", "=", $id)
            ->update(["available" => 0]);
        return redirect("timekeeping");
    }
    public function salary($id)
    {
    }
}
