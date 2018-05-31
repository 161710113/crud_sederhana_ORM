<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'tipes';
    protected $fillable = array('nama');
    public $timestamp = true;

    public function Mobil() {
        return $this->hasMany('App/Mobil', 'tipe_id');
  }
}