<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebun extends Model
{
    use HasFactory;

    protected $table = 'kebun';
    protected $fillable = ['lokasi', 'luas', 'status', 'tanggal_tanam', 'tanggal_panen'];

    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'kebun_id', 'id');
    }
}

