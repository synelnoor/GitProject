<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artikel;

Use DB;

class artikelController extends Controller
{
    //
     public function index(){
        $data= artikel::orderBy('id','desc')->get();

        return view('artikel.artikel',['data'=> $data]);
        //return view('artikel.artikel');
    }

    public function create(){

    	 return view('artikel.create');
    }

    public function store(Request $request){

    	$this->validasi($request);

    	$artikel = new Artikel();
    	$artikel->id=$request->get('id');
    	$artikel->judul= $request->get('judul');
    	$artikel->img=$request->file('img')->move("img/",$filename);
    	//$artikel->img=$filename;
    	$artikel->isi=$request->get('isi');
    	$artikel->date=$request->get('date');
    	$artikel->save();

    	return view('artikel.create',['message'=>'Sukses simpan Data']);
    }

     function validasi($request) {
        $this->validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'img' => 'required',
            'isi' => 'required',
            'date'=>'requred'
            
        ]);
    }
    


}
