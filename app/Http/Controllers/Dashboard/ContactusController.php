<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Model\ContactModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactusController extends Controller
{
    public function index()
    {
        $data=ContactModel::all();
        return view('dashboard.ContactUs')->with('data',$data);
    }

    public function insert(ContactRequest $request)
    {
        $date=Carbon::now();
        $data = array(
            'alamat' => $request->alamat,
            'kantor_pos'=>$request->kantor_pos,
            'email'=>$request->email,
            'telepon'=>$request->telepon, 
            'created_at'=>$date,
            'updated_at'=>$date
        );
        DB::table('contactus')->insert($data);
        return redirect()->back()->with('status',' Data berhasil di simpan');
    }

    public function edit($id)
    {
        $response = ContactModel::where('id', $id)->first();
        return response()->json($response);
    }

    public function update(ContactRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'alamat' => $request->alamat,
            'kantor_pos'=>$request->kantor_pos,
            'email'=>$request->email,
            'telepon'=>$request->telepon, 
            'updated_at'=>$date
        );
        DB::table('contactus')->where('id', $id)->update($data);
        return response()->json();
    }
    public function delete($id)
    {
        ContactModel::where('id', $id)->delete();
        return response()->json();
    }
}
