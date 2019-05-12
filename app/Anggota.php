<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nama_anggota', 'tgl_lahir', 'tgl_daftar','kelamin','alamat','no_hp'];
}
