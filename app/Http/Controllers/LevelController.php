<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLevel = DB::table("level")
            ->where("available", "=", 1)
            ->get();

        return view('level.list', [
            "listLevel" => $listLevel
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
        $level = Level::find($id);
        return view('level.edit', [
            "level" => $level
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
        $bsSalary = $request->get('basic_salary');
        $level = Level::find($id);
        $level->basic_salary = $bsSalary;
        $level->save();
        return redirect()->route('level.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Level::where('id_level', $id)->delete();
        // return redirect(route('level.index'));
    }
    public function hide($id)
    {
        $Emp = DB::table("employees")
            ->where("level", "=", $id)
            ->update(["available" => 0]);
        $Level = DB::table("level")
            ->where("id_level", "=", $id)
            ->update(["available" => 0]);
        return redirect("level");
    }
}
