<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContohRequest;
use App\Model\ContohModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ContohController extends Controller
{
    public function index()
    {
        $data = ContohModel::all();
        return view('copy_this.table')->with('data', $data);
    }

    public function insert(ContohRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'nama' => $request->nama,
            'ket' => $request->ket,
            'created_at' => $date,
            'updated_at' => $date,
        );
        DB::table('contoh')->insert($data);
        return redirect()->back()->with('status', 'Data berhasil di simpan');
    }

    public function edit($id)
    {
        $response = ContohModel::where('id', $id)->first();
        return response()->json($response);
    }

    public function update(ContohRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'nama' => $request->nama,
            'ket' => $request->ket,
            'updated_at' => $date,
        );
        DB::table('contoh')->where('id', $id)->update($data);
        return response()->json();
    }
}
