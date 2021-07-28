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
        return view('dashboard.Kecamatan')->with('data',$data);
    }

    public function insert(KecamatanRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kecamatan' => $request->nama_kecamatan,
            'koordinat' => $request->koordinat,
            'created_at' => $date,
            'updated_at' => $date
        );
        DB::table('kecamatan')->insert($data);
        return redirect()->back()->with('status', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $response = KecamatanModel::where('id', $id)->first();
        return response()->json($response);
    }

    public function update(KecamatanRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kecamatan' => $request->nama_kecamatan,
            'koordinat' => $request->koordinat,
            'updated_at' => $date,
        );
        DB::table('kecamatan')->where('id', $id)->update($data);
        return response()->json();
    }

    public function delete($id)
    {
        KecamatanModel::where('id', $id)->delete();
        return response()->json();
    }
}

