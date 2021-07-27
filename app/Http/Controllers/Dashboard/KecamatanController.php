<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KecamatanModel;

class KecamatanController extends Controller
{
    public function index()
    {
        $data = KecamatanModel::all();
        return view('dashboard.kecamatan')->with('data',$data);
    }


}
