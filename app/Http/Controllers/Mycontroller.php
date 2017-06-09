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

            public function percobaan7($id)
    {
    	
    	$pilihan =['buah'=>['Mangga','Jeruk','Apel','Anggur','Manggis'],
    	   'makhluk'=>['gajah','jerapah','kucing','semut','elang'],
    	   'komputer'=>['apple','hp','acer','samsung','asus']];

        $ubed=$pilihan[$id];

    	return view ('latihan.latihan', compact('ubed','id'));
    }


     public function percobaan8($pilih,$jenis)
    {
        
        $satwa=['binatang'=>['elang'=>['jawa','mongol','rajawali'],
                'semut'=>['jawa','tanah','kalimantan'],
                'kucing'=>['jawa','persia','anggora'],

        'buah'     =>['Mangga'=>['jawa','mongol','rajawali'],
                'Manggis'=>['jawa','jabar','kalimantan'],
                'jeruk'=>['jawa','persia','mandarin'],

        'komputer'=>['acer'=>['456R','2','0'],
                'semut'=>['645F','6','12'],
                'kucing'=>['65435S','4','43']]];
           
        
        $jac=$satwa[$pilih];
        return view ('param', compact('pilih','jac','binatang'));
    }
  
}
