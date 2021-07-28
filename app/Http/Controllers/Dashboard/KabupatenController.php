<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\KabupatenRequest;
use App\Model\KabupatenModel;
use App\Model\KecamatanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KabupatenController extends Controller
{
    public function index()
    {
        $data = array(
            'kabupaten' => KabupatenModel::all()
        );
        return view('dashboard.Kabupaten')->with('data', $data);
    }
    public function insert(KabupatenRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kabupaten' => $request->nama_kabupaten,
            'created_at' => $date,
            'updated_at' => $date,
        );
        DB::table('kabupaten')->insert($data);
        return redirect()->back()->with('status', 'Data berhasil di simpan');
    }
    public function edit($id)
    {
        $response = KabupatenModel::where('id', $id)->first();
        return response()->json($response);
    }
    public function update(KabupatenRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'nama_kabupaten' => $request->nama_kabupaten,
            'updated_at' => $date,
        );
        DB::table('kabupaten')->where('id', $id)->update($data);
        return response()->json();
    }

    public function delete($id)
    {
        KabupatenModel::where('id', $id)->delete();
        return response()->json();
    }
}
