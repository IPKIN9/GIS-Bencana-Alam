<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\KelasModel;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data=KelasModel::all();
        return view('dashboard.Kelas')->with('data',$data);
    }
}
