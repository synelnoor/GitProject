<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artikel;

Use DB;

Use Image;

class artikelController extends Controller
{
    //
     public function index(){
        $data= artikel::orderBy('id','asc')->get();

        return view('artikel.artikel',['data'=> $data]);
        //return view('artikel.artikel');
    }

    public function create(){

    	 return view('artikel.create');
    }

    public function store(Request $request){

        $this->validasi($request);
      

            $image = $request->file('img');
            

            
                $destinationPath = 'upimg';

                $filename = $image->getClientOriginalName();
                $fullname = rand(11111,99999).'.'.$filename;
                $green = $image->move($destinationPath, $fullname);

                Image::make($green)->resize('110','170')->save('upimg/thumbs/'.$fullname);


                $artikel = new Artikel();
                $artikel->judul=$request->get('judul');
                $artikel->img=$fullname;
                $artikel->isi=$request->get('isi'); 
                $Sukses=$artikel->save();

                return view('artikel.create',['message'=>'Sukses simpan Data']);

          
        }
    	
       
 
         
        

    	
    
    function upload($request){
        // $gmbr = $request->file('img');
        // $namaFile = $gmbr->getClientOriginalName();
        // $request->file('img')->move('img', $namaFile);
        
        // $do->img = $namaFile;

        if(Input::hasFile('img')){
            

            $file = Input::file('img');

            $destinationPath = public_path(). '/upimg';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            echo  $filename;
            }
        
    }

     function validasi($request) {

        $this->validate($request, [
            
            'judul' => 'required',
            'img' => 'required',
            'isi' => 'required'
             
        ]);

        
    }
    

    public function show($id){

        $data = artikel::where('id',$id)->first();

         return view('artikel.edit',['data'=>$data]);
    }
    public function update(Request $request){


        $this->validasi($request);


            $image = $request->file('img');
            

            
                $destinationPath = 'upimg';

                $filename = $image->getClientOriginalName();
                $fullname = rand(11111,99999).'.'.$filename;
                $green = $image->move($destinationPath, $fullname);

                Image::make($green)->resize('110','170')->save('upimg/thumbs/'.$fullname);

                    $artikel = artikel::where('id', $request->get('id'))->first();
                    $artikel->judul=$request->get('judul');
                    $artikel->img=$fullname;
                    $artikel->isi=$request->get('isi'); 
                    $Sukses=$artikel->save();

                    return redirect('artikel.edit');

    }
    public function destroy($id){
        

        $data= artikel::where('id',$id)->delete();
        
         \Session::flash('message', 'Data Berhasil Dihapus');
      return \Redirect::to('artikel');
    }


}
