<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['id_pengarang','id_rak','id_penerbit','judul','stok','tanggal_terbit'];
}
