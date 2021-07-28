<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KecamatanModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KecamatanRequest;
use App\Model\KabupatenModel;

class KecamatanController extends Controller
{
    public function index()
    {
        $data = array(
            'kecamatan' => KecamatanModel::with('kabupaten_role')->get(), 
            'kabupaten' => KabupatenModel::all()
        );
        return view('dashboard.Kecamatan')->with('data',$data);
    }

    public function insert(KecamatanRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kecamatan' => $request->nama_kecamatan,
            'id_kabupaten' => $request->id_kabupaten,
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
            'id_kabupaten' => $request->id_kabupaten,
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

