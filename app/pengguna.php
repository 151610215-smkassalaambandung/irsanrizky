<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
     protected $table='produk';
    protected $fillable=['nama','alamat','nohp'];
      protected $visible=['nama','alamat','nohp'];
      public $timestamps=true;
}

