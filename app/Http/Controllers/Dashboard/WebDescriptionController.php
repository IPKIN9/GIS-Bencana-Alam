<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebDescriptionRequest;
use App\Model\WebDesciptionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebDescriptionController extends Controller
{
    public function index()
    {
        $data=WebDesciptionModel::all();
        return view('dashboard.WebDescription')->with('data',$data);
    }

    public function insert(WebDescriptionRequest $request)
    {
        $date=Carbon::now();
        $data = array(
            'deskripsi' => $request->deskripsi ,
            'created_at'=>$date,
            'updated_at'=>$date 
        );
        DB::table('web_description')->insert($data);
        return redirect()->back()->with('status','Data berhasil di simpan');
    }

    public function edit($id)
    {
        $response = WebDesciptionModel::where('id', $id)->first();
        return response()->json($response);
    }

    public function update(WebDescriptionRequest $request, $id)
    {
        $date = Carbon::now();
        $data = array(
            'deskripsi' => $request->deskripsi ,
            'updated_at'=>$date
        );
        DB::table('web_description')->where('id', $id)->update($data);
        return response()->json();
    }

    public function delete($id)
    {
        WebDesciptionModel::where('id', $id)->delete();
        return response()->json();
    }

}
