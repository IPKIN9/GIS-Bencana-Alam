<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasRiquest;
use App\Model\KelasModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $data=KelasModel::all();
        return view('dashboard.Kelas')->with('data',$data);
    }

    public function insert(KelasRiquest $request)
    {
        $date=Carbon::now();
        $data = array(
            'nama_kelas' => $request->nama_kelas,
            'created_at' => $date,
            'updated_at'  => $date
        );
        DB::table('kelas')->insert($data);
        return redirect()->back()->with('status','Data berhasil di simpan');
    }
}
