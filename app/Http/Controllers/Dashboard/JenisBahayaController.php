<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\JenisBahayaRequest;
use App\Model\JenisBahayaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class JenisBahayaController extends Controller
{
    public function index()
    {
       $data = JenisBahayaModel::all();
        return view('dashboard.JenisBahaya') -> with('data',$data);
    }

    public function insert(JenisBahayaRequest $request)
    {
        $date = Carbon::now();
        $data=array(
            'nama_jenis_bahaya' => $request->nama_jenis_bahaya,
            'created_at' => $date,
            'updated_at' => $date
        );
        DB::table('jenis_bahaya')->insert($data);
        return redirect()->back()->with('status','Data berhasil di simpan');

    }

    public function edit($id)
    {
        $response = JenisBahayaModel::where('id',$id)->first();
        return response()->json($response);
    }
}
