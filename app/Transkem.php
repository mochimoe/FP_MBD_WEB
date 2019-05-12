<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transkem extends Model
{
    protected $fillable = ['id_pinjam','id_petugas','id_buku','tanggal_pengembalian'];
}
