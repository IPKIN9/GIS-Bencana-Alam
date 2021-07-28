<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\KasusModel;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function index()
    {
        $data = array(
            'kasus' => KasusModel::with(
                'kabupaten_rol',
                'kecamatan_rol',
                'jenis_bahaya_rol',
                'kelas_rol',
            )->get(),
        );
        return view('dashboard.Kasus')->with('data', $data);
    }
}
