<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable = array('nama', 'warna', 'transmisi','no_hp','harga','deskripsi','tipe_id','merk_id','member_id');
    public $timestamp = true;

    public function Iklan() {
		  return $this->hasOne('App/Iklan', 'mobil_id');
    }
    public function Galeri() {
		  return $this->hasMany('App/galeri', 'mobil_id');
    }
    public function Merk() {
		  return $this->belongsTo('App/Merk', 'merk_id');
    }
    public function Tipe() {
      return $this->belongsTo('App/Tipe', 'tipe_id');
    }
    public function Member() {
      return $this->belongsTo('App/Member', 'member_id');
    }
}