<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\JenisBahayaModel;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class JenisBahayaController extends Controller
{
    public function index(){
       $data = JenisBahayaModel::all();
        return view('dashboard.JenisBahaya') -> with('data',$data);
    }
}
