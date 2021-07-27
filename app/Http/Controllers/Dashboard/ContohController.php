<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        return view('copy_this.table');
    }
}
