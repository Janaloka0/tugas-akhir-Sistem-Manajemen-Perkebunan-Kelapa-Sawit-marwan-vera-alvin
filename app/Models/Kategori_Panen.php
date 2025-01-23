<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_Panen extends Model
{
    protected $table = 'panen';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function panen()
    {
        
    }
}
