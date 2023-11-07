<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 7 ;
        $b = 3 ;
        $c = $a * $b ;
        return " <h1> Hasil perkalian adalah : " .$c. "</h1>";
    }

    public function biodata(){
    	$nama = "Muhammad Zaidan Hafsh Fawwaz";
        $alamat = "Surabaya" ;
        $umur = 18 ;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
