<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a="irsan";
    	return "Nama saya adalah :".$a;
    }

    //passing data show view
    public function percobaan2()
    {
    	return view('about');
    }

    //passing data variable to view 
    public function percobaan3()
    {
    	$a="IrsanRH";
    	return view ('latihan.saya', compact('a'));
    }

      public function percobaan4()
    {
    	$a="IrsanRH";
    	$b="XII RPL 2";
    	$c="SMK ASSALAAM";
    	return view ('latihan.irsan', compact('a','b','c'));
    }

    public function percobaan5()
    {
    	$a=1;
    	$b=2;
    	$c=3;
    	return view ('latihan.seleksi', compact('a','b','c'));
    }

        public function percobaan6()
    {
    	
    	$buah =['Mangga','Jeruk','Apel','Anggur'];
    	return view ('buah', compact('buah'));
    }

            public function percobaan7()
    {
    	
    	$buah =['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	$makhluk=['gajah','jerapah','buaya','semut','elang'];
    	$komputer=['apple','hp','acer','samsung','asus'];
    	return view ('latihan.latihan', compact('buah','makhluk','komputer'));
    }

    public function percobaan7($buah)
    {
    	
    	$buah =['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	dd($buah);
    	return view ('latihan.latihan', compact('buah'));
	}
}


