<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public $table = 'petugass';
    protected $fillable = ['nama','alamat','jenis_kelamin','no_hp','tanggal_lahir'];
}
