<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function mobil()
	{
    	// mengambil data dari table mobil
		// $pegawai = DB::table('mobil')->get();
		$mobil = DB::table('mobil')->get();

    	// mengirim data mobil ke view blade.php
		return view('mobil',['mobil' => $mobil]);

	}

    public function tambahmobil()
	{

		// memanggil view tambah
		return view('tambahmobil');

	}
	public function store(Request $request)
	{
		// insert data ke table mobil
		DB::table('mobil')->insert([
			'kodemobil' => $request->kodemobil,
 			'merkmobil' => $request->merkmobil,
 			'stockmobil' => $request->stockmobil,
 			'tersedia' => $request->tersedia
 		]);
 		// alihkan halaman ke halaman mobil
 		return redirect('/mobil');

 	}


}
