<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\ContohModel;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        $data = ContohModel::all();
        return view('copy_this.table')->with('data', $data);
    }
}
