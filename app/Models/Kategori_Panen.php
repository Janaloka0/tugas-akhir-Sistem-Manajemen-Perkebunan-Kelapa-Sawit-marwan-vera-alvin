<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_Panen extends Model
{
    protected $table = 'kategori_panen';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function panen()
    {
        return $this->hasMany(Panen::class, 'kategori_panen_id', 'id');
    }
}
