<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasRequest;
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

    public function insert(KelasRequest $request)
    {
        $date=Carbon::now();
        $data = array(
            'nama_kelas' => $request->nama_kelas,
            'created_at' => $date,
            'updated_at' => $date
        );
        DB::table('kelas')->insert($data);
        return redirect()->back()->with('status','Data berhasil di simpan');
    }

    public function edit($id)
    {
        $response = KelasModel::where('id', $id)->first();
        return response()->json($response);
    }

    public function update(KelasRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kelas' => $request->nama_kelas,
            'updated_at' => $date
        );
        DB::table('kelas')->where('id',$id)->update($data);
        return response()->json();
    }

    public function delete($id)
    {
        KelasModel::where('id', $id)->delete();
        return response()->json();
    }
}
