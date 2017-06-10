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

    //         public function percobaan7($id)
    // {
    	
    // 	$pilihan =['buah'=>['Mangga','Jeruk','Apel','Anggur','Manggis'];
    // 	   'makhluk'=>['gajah','jerapah','kucing','semut','elang'];,
    // 	   'komputer'=>['apple','hp','acer','samsung','asus'));

    // 	return view ('latihan.latihan', compact('ubed','id'));
    // }


//      public function percobaan8($data,$data2 =null)
//     {
        
//         $array= array ('binatang'=>['elang'=>['jawa','mongol','rajawali'],
//                 'Semut'=>   ['jawa','tanah','kalimantan'],
//                 'Kucing'=>  ['jawa','persia','anggora']],

//                 'buah'=>    ['Mangga'=>['jawa','mongol','rajawali'],
//                 'Manggis'=> ['jawa','jabar','kalimantan'],
//                 'Jeruk'=>   ['jawa','persia','mandarin']],

//                 'komputer'=>['Acer'=>['456R','2','0'],
//                 'Dell'=>    ['645F','6','12'],
//                 'Asus'=>    ['65435S','4','43']]
//                 );

//               if($data){
//                 $query = (array_keys($array[$data])); 
//                 } 
//                if($data2){
//                 $query = ($array[$data][$data2]);
//                }  
//         return view ('param', compact('query','data','data2'));
//     }
  
// }
