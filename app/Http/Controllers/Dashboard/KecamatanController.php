<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KecamatanModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KecamatanRequest;

class KecamatanController extends Controller
{
    public function index()
    {
        $data = KecamatanModel::all();
        return view('dashboard.kecamatan')->with('data',$data);
    }

    public function insert(KecamatanRequest $request)
    {
        $$table->date('field_name')->unique()->nullable()->default(field_default)->comment('field_comment')->after('field_name'); = Carbon::now();
        $data = array(
            'nama_kecamatan' => $request->nama_kecamatan,
            'kordinat' => $request->kordinat,
            'created_at' => $date,
            'updated_at' => $date
        );
        DB::table('kecamatan')->insert($data);
        return redirect()->back()->with('status', 'Data Berhasil Disimpan');
    }


}
