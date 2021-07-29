<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BahayaRequest;
use App\Http\Requests\KasusRequest;
use App\Model\BahayaModel;
use App\Model\JenisBahayaModel;
use App\Model\KabupatenModel;
use App\Model\KasusModel;
use App\Model\KecamatanModel;
use App\Model\KelasModel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function index()
    {
        $data = array(
            'kasus' => KasusModel::with(
                'kabupaten_rol',
                'kecamatan_rol',
                'bahaya_rol',
            )->get(),
            'kabupaten' => KabupatenModel::all(),
            'kecamatan' => KecamatanModel::all(),
            'jenis_bahaya' => JenisBahayaModel::all(),
            'kelas' => KelasModel::all(),
        );
        return view('dashboard.Kasus')->with('data', $data);
    }

    public function search($id)
    {
        $response = KecamatanModel::where('id_kabupaten', $id)->get();
        return response()->json($response);
    }

    public function bahaya_insert(BahayaRequest $request)
    {
        $random = Str::random(20);
        $code = time() . "_" . $random;
        $date = Carbon::now();
        $data = array(
            'code_bahaya' => $code,
            'id_jenis_bahaya' => $request->id_jenis_bahaya,
            'total_luas_bahaya' => $request->total_luas_bahaya,
            'id_kelas' => $request->id_kelas,
            'jumlah_penduduk_terpapar' => $request->jumlah_penduduk_terpapar,
            'total_kerugian' => $request->total_kerugian,
            'kelas_kerugian' => $request->kelas_kerugian,
            'kelas_kerusakan' => $request->kelas_kerusakan,
            'created_at' => $date,
            'updated_at' => $date,
        );
        DB::table('bahaya')->insert($data);
        $id = BahayaModel::where('code_bahaya', $code)->value('id');
        $response = array(
            'code' => $code,
            'id' => $id,
        );
        return response()->json($response);
    }

    public function delete_detail($id)
    {
        BahayaModel::where('id', $id)->delete();
        return response()->json();
    }

    public function insert(KasusRequest $request)
    {
        $date = Carbon::now()->toDateString();
        $data = array(
            'id_bahaya' => $request->id_bahaya,
            'code_bahaya' => $request->code_bahaya,
            'id_kabupaten' => $request->id_kabupaten,
            'id_kecamatan' => $request->id_kecamatan,
            'created_at' => $date,
            'updated_at' => $date,
        );
        DB::table('kasus')->insert($data);
        return redirect()->back()->with('status', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $response = KasusModel::where('id', $id)->with('bahaya_rol')->first();
        return response()->json($response);
    }

    public function update(Request $request, $id)
    {
        $date = Carbon::now()->toDateString();
        $data = array(
            'id_jenis_bahaya' => $request->id_jenis_bahaya,
            'total_luas_bahaya' => $request->total_luas_bahaya,
            'id_kelas' => $request->id_kelas,
            'jumlah_penduduk_terpapar' => $request->jumlah_penduduk_terpapar,
            'total_kerugian' => $request->total_kerugian,
            'kelas_kerugian' => $request->kelas_kerugian,
            'kelas_kerusakan' => $request->kelas_kerusakan,
            'updated_at' => $date
        );
        BahayaModel::where('id', $id)->update($data);
        return response()->json();
    }

    public function delete($id)
    {
        $where = KasusModel::where('id', $id)->value('id_bahaya');
        KasusModel::where('id', $id)->delete();
        BahayaModel::where('id', $where)->delete();
        return response()->json();
    }
}
