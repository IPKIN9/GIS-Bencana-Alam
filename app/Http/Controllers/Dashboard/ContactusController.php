<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\ContactModel;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $data=ContactModel::all();
        return view('dashboard.Contactus')->with('data',$data);
    }
}
