<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transpim extends Model
{
    protected $fillable = ['id_anggota','id_petugas','tanggal_pinjam','tanggal_kembali'];
}
