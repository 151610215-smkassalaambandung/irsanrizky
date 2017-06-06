<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaturan extends Model
{
    //
    protected $table='produk';
    protected $fillable=['namasitus','alamat','email'];
      protected $visible=['namasitus','alamat','email'];
      public $timestamps=true;
}

