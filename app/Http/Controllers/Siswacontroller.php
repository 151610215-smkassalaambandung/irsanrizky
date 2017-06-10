<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class Siswacontroller extends Controller
{
    //record
    public function percobaan()

    {

    	$b =Siswa::all();
    	return view('siswa',compact('b'));

    }

    //id
     public function percobaan1($id)

    {
    	$a =Siswa::find($id);
    	return $a;

    }

}
