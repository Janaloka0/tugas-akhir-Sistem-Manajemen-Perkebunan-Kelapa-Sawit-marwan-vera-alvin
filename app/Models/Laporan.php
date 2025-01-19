<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $fillable = ['kebun_id', 'file_path', 'file_type', 'tanggal_laporan'];

    public function kebun()
    {
        return $this->belongsTo(Kebun::class, 'kebun_id');
    }
}
