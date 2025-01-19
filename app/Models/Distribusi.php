<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;

    protected $table = 'distribusi';
    protected $fillable = ['produksi_id', 'tujuan', 'jumlah', 'tanggal_distribusi'];

    /**
     * Relasi Many-to-One: Distribusi berhubungan dengan Produksi.
     */
    public function produksi()
    {
        return $this->belongsTo(Produksi::class, 'produksi_id');  // Menghubungkan dengan produksi_id di tabel distribusi
    }
}
