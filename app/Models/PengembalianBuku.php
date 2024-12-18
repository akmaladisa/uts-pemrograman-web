<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianBuku extends Model
{
    use HasFactory;

    protected $fillable = ['peminjaman_id', 'tanggal_kembali', 'denda'];

    public function peminjaman()
    {
        return $this->belongsTo(PeminjamanBuku::class);
    }

    protected $table = 'pengembalian_buku';
}
