<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TimekeeppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
