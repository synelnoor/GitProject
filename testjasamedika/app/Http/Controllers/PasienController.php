<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pasien;
use DB;

class PasienController extends Controller
{
    public function index() {
    	$data = Pasien::orderBy('nama', 'asc')->get(); //orm
    	//$data = DB::table('pasien')->get(); //query builder

    	return view('pasien.pasien', ['data' => $data]);
    }

    public function create() {
    	$kode = $this->generateKode();

    	return view('pasien.create', ['kode' => $kode]);
    }

    public function store(Request $request) {

    	$this->validasi($request);
    	
	    $pasien = new Pasien();
	    $pasien->id = $request->get('id');
	    $pasien->nama = $request->get('nama');
	    $pasien->alamat = $request->get('alamat');
	    $pasien->hp = $request->get('hp');
	    $pasien->kelurahan = $request->get('kelurahan');
	    $pasien->rt_rw = $request->get('rt');
	    $pasien->tanggal_lahir = $request->get('date');
	    $pasien->jenis_kelamin = $request->get('jenis_kelamin');
	    $pasien->save();

	    return view('pasien.create', ['kode' => $this->generateKode(), 'message' => 'Sukses simpan data']);
    }

    public function show($id) {
    	$data = Pasien::where('id', $id)->first();

    	return view('pasien.edit', ['data' => $data]);
    }

    public function update(Request $request) {
    	$this->validasi($request);

	    $pasien = Pasien::where('id', $request->get('id'))->first();
	    $pasien->nama = $request->get('nama');
	    $pasien->alamat = $request->get('alamat');
	    $pasien->hp = $request->get('hp');
	    $pasien->kelurahan = $request->get('kelurahan');
	    $pasien->rt_rw = $request->get('rt');
	    $pasien->tanggal_lahir = $request->get('date');
	    $pasien->jenis_kelamin = $request->get('jenis_kelamin');
	    $pasien->save();

	    return view('pasien.edit', ['data' => $pasien, 'message' => 'Sukses simpan data']);
    }

    function generateKode() {
    	$count = DB::table('pasien')->count();

    	$format = date('ym');

    	$temp = '000000';
    	$lengthCount = strlen($count);
    	
    	if ($lengthCount == 1) {
    		$temp = '000000';
    	} elseif ($lengthCount == 2) {
    		$temp = '00000';
    	} elseif ($lengthCount == 3) {
    		$temp = '0000';
    	} elseif ($lengthCount == 4) {
    		$temp = '000';
    	} elseif ($lengthCount == 5) {
    		$temp = '00';
    	} elseif ($lengthCount == 6) {
    		$temp = '0';
    	} else {
    		$temp = '';
    	}

    	return $format.$temp.$count;
    }

    function validasi($request) {
    	$this->validate($request, [
	        'id' => 'required',
	        'nama' => 'required',
	        'alamat' => 'required',
	        'hp' => 'required|numeric',
	        'kelurahan' => 'required',
	        'rt' => 'required',
	        'date' => 'required',
	        'jenis_kelamin' => 'required|numeric'
	    ]);
    }

 	public function destroy($id){
 		$data= pasien::where('id',$id)->delete();
 		\Session::flash('message', 'Data Berhasil Dihapus');
      return \Redirect::to('pasien');
 		
 	}

}
