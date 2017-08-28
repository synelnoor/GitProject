<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kelurahan;

Use DB;

class KelurahanController extends Controller
{
    //
    public function index(){
        $data= Kelurahan::orderBy('kelurahan','desc')->get();

        return view('kelurahan.kelurahan',['data'=> $data]);
        //return view('kelurahan.kelurahan');
    }

    public function create(){
       
        //$data= kelurahan::all();

        return view('kelurahan.create');
    }


    public function store(Request $request){

        $this->validasi($request);

        $kelurahan = new Kelurahan();
        $kelurahan->id= $request->get('id');
        $kelurahan->kelurahan= $request->get('kelurahan');
        $kelurahan->kecamatan= $request->get('kecamatan');
        $kelurahan->kota= $request->get('kota');
        $kelurahan->save();

        return view('kelurahan.create',['message'=>'Sukses simpan Data']);
    }


     
    function validasi($request) {
        $this->validate($request, [
            'id' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required'
            
        ]);
    }


    public function show($id){
            $data = Kelurahan::where('id',$id)->first();

            return view('kelurahan.edit',['data' =>$data]);
    }

    public function update(Request $request){
        $this->validasi($request);

        $kelurahan = Kelurahan::where('id',$request->get('id'))->first();
        $kelurahan->kelurahan= $request->get('kelurahan');
        $kelurahan->kecamatan= $request->get('kecamatan');
        $kelurahan->kota= $request->get('kota');
        $kelurahan->save();

        return view('kelurahan.edit', ['data' => $kelurahan, 'message' => 'Sukses simpan data']);
    }

    public function destroy($id){
        $data= Kelurahan::where('id',$id)->delete();
        \Session::flash('message', 'Data Berhasil Dihapus');
      return \Redirect::to('kelurahan');
        
    }

   
}
