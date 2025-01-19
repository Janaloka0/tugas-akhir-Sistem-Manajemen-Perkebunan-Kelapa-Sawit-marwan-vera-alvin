<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;

    protected $fillable = ['kebun_id', 'jumlah_tandan', 'berat_total', 'tanggal_panen'];

    // Relasi ke kebun
    public function kebun()
    {
        return $this->belongsTo(Kebun::class, 'kebun_id');
    }
    public function distribusis()
    {
        return $this->hasMany(Distribusi::class, 'produksi_id'); // Menghubungkan dengan produksi_id di tabel distribusi
    }
}
