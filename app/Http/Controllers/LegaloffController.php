<?php

namespace App\Http\Controllers;

use App\Models\LegalOff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegaloffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLegal = LegalOff::join("employees", "employees.id_employee", "=", "legal_off.id_employee")
            ->where("legal_off.available", "=", 1)
            ->paginate(5);
        return view('legal_off.list', [
            'listLegal' => $listLegal
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
        $legal = LegalOff::join("employees", "employees.id_employee", "=", "legal_off.id_employee")
            ->find($id);
        return view('legal_off.show', [
            "legal" => $legal
        ]);
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
    }
    public function hide($id)
    {

        $Dep = DB::table("legal_off")
            ->where("id_legal", "=", $id)
            ->update(["available" => 0]);
        return redirect("legalOff");
    }
    // từ gửi kèm theo cái id cảu đơn chứ thì mới biết thằng naofnmaf cập nhật lại trạng thái cho thằng đấy chứnc
    // duyệt
    public function approve($id)
    {
        // đây lấy ra ở đây trc đã xong xem trạng thái đax nếu mà khác null thì k cho lmj hiểu chưa
        $kaka = DB::table('legal_off')
            ->where('id_legal', $id)->value('approve');

        if ($kaka === null) {
            $affected = DB::table('legal_off')
                ->where('id_legal', $id)
                ->update(['approve' => 0]);
        }
        return redirect("legalOff");
    }

    // k duyệt
    public function approve1($id)
    {
        $kaka = DB::table('legal_off')
            ->where('id_legal', $id)->value('approve');
        if ($kaka === null) {
            $affected = DB::table('legal_off')
                ->where('id_legal', $id)
                ->update(['approve' => 1]);
        }
        return redirect("legalOff");
    }
}
