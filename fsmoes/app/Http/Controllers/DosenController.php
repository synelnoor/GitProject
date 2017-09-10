<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

Use DB;

Use Image;

class DosenController extends Controller
{
    //

    public function index(){
    	$data= dosen::orderBy('id','asc')->get();

    	return view('dosen.dosen',['data'=>$data]);
    }
    public function create(){
    	return view('dosen.create');
    }
    public function store(Request $request){

    	$this->validasi($request);
      

            $image = $request->file('img');
            

            
                $destinationPath = 'upimg/dosimg';

                $filename = $image->getClientOriginalName();
                $fullname = rand(11111,99999).'.'.$filename;
                $green = $image->move($destinationPath, $fullname);

                Image::make($green)->resize('110','170')->save('upimg/dosimg/thumbs/'.$fullname);


                $artikel = new Dosen();
                $artikel->nama=$request->get('nama');
                $artikel->img=$fullname;
                $artikel->jabatan=$request->get('jabatan'); 
                $artikel->save();

                return view('dosen.create',['message'=>'Sukses simpan Data']);


    }

					function validasi($request) {

					    $this->validate($request, [
					        
					        'nama' => 'required',
					        'img' => 'required',
					        'jabatan' => 'required'
					         
					    ]);
					}
    public function show($id){

        $data = Dosen::where('id',$id)->first();

        return view('dosen.edit',['data'=>$data]);
    }
    public function update(Request $request){


        $this->validasi($request);
      

            $image = $request->file('img');
            

            
                $destinationPath = 'upimg/dosimg';

                $filename = $image->getClientOriginalName();
                $fullname = rand(11111,99999).'.'.$filename;
                $green = $image->move($destinationPath, $fullname);

                Image::make($green)->resize('110','170')->save('upimg/dosimg/thumbs/'.$fullname);


                $artikel = new Dosen();
                $artikel->nama=$request->get('nama');
                $artikel->img=$fullname;
                $artikel->jabatan=$request->get('jabatan'); 
                $artikel->save();

                return view('dosen.create',['message'=>'Sukses simpan Data']);
    }
    public function destroy($id){
          $data= Dosen::where('id',$id)->delete();
        
         \Session::flash('message', 'Data Berhasil Dihapus');
      return \Redirect::to('dosen');
    }
    
    }

