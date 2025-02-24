<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Nama tabel yang terkait dengan model ini
    protected $table = 'siswa';

    // Nama primary key (default adalah 'id', jadi ini opsional jika primary key-nya 'id')
    protected $primaryKey = 'id';

    // Field yang dapat diisi secara massal (mass assignment)
    protected $fillable = [
        'nis',       // Nomor Induk Siswa
        'nama',       // Nama siswa
        'jk',        // Jenis kelamin
        'rombel',     // Rombongan belajar
        'rayon',      // Rayon
    ];

    // Field yang akan disembunyikan ketika model di-convert ke array atau JSON
    protected $hidden = [
        // Contoh: 'password', 'remember_token', dll.
    ];

    // Timestamps (created_at dan updated_at)
    // Jika tabel tidak memiliki kolom ini, set menjadi false
    public $timestamps = true;

    // Contoh relasi (jika diperlukan)
    // Relasi ke model Rombel (jika ada tabel rombel)
    // public function rombel()
    // {
    //     return $this->belongsTo(Rombel::class, 'rombel', 'id');
    // }

    // Relasi ke model Rayon (jika ada tabel rayon)
    // public function rayon()
    // {
    //     return $this->belongsTo(Rayon::class, 'rayon', 'id');
    // }
}