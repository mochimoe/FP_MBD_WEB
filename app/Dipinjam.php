<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dipinjam extends Model
{
    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('id_pinjam', '=', $this->getAttribute('id_pinjam'))
            ->where('id_buku', '=', $this->getAttribute('id_buku'));
        return $query;
    }
    public $timestamps = true;
    protected $fillable = ['id_pinjam','id_buku'];
}
