<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\BahayaModel;
use App\Model\JenisBahayaModel;
use App\Model\KasusModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->toDateString();
        $data = array(
            'kasus' => KasusModel::count(),
            'kasus_today' => KasusModel::where('created_at', $date)->count(),
            'bencana' => JenisBahayaModel::count(),
            'penduduk' => BahayaModel::sum('jumlah_penduduk_terpapar'),
            'kasus_list' => KasusModel::where('created_at', $date)->take(5)->with('kabupaten_rol', 'kecamatan_rol', 'bahaya_rol')->get(),
        );

        return view('dashboard.Home')->with('data', $data);
    }
}
