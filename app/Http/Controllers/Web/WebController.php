<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\BahayaModel;
use App\Model\ContactModel;
use App\Model\JenisBahayaModel;
use App\Model\KabupatenModel;
use App\Model\KasusModel;
use App\Model\KecamatanModel;
use App\Model\WebDesciptionModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $data = array(
            'jumlah_bencana' => JenisBahayaModel::count(),
            'total_kerugian' => BahayaModel::sum('total_kerugian'),
            'jumlah_kabupaten' => KabupatenModel::count(),
            'jumlah_kecamatan' => KecamatanModel::count(),
            'kasus_terbaru' => KasusModel::with('bahaya_rol')->orderBy('created_at', 'DESC')->take(5)->get(),
            'jumlah_terpapar' => BahayaModel::with('jenis_bahaya_rol')->take(5)->get(),
        );
        return view('web.Website')->with('data', $data);
    }

    public function about()
    {
        $data = array(
            'webdesc' => WebDesciptionModel::first(),
            'contact' => ContactModel::first(),
        );
        return view('web.About_us')->with('data', $data);
    }

    public function maps()
    {
        $data = array(
            'jumlah_bencana' => JenisBahayaModel::count(),
            'total_kerugian' => BahayaModel::sum('total_kerugian'),
            'jumlah_kabupaten' => KabupatenModel::count(),
            'jumlah_kecamatan' => KecamatanModel::count(),
            'kasus_terbaru' => KasusModel::with('bahaya_rol')->orderBy('created_at', 'DESC')->take(5)->get(),
            'jumlah_terpapar' => BahayaModel::with('jenis_bahaya_rol')->take(5)->get(),
            'marker_kecamatan' => KecamatanModel::with('kabupaten_role')->get(),
            'list_kabupaten' => KabupatenModel::all(),
        );
        return view('web.Maps')->with('data', $data);
    }

    public function search($id)
    {
        $where = KasusModel::where('id_kecamatan', $id)->value('kode_kecamatan');
        $response = BahayaModel::with('jenis_bahaya_rol', 'kelas_rol', 'kerugian_rol', 'kerusakan_rol')->where('kode_kecamatan', $where)->get();
        return response()->json($response);
    }
}
