<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    protected $table = 'nilai';

    // The primary key associated with the table
    protected $primaryKey = 'id';

    // If the primary key is not an auto-incrementing integer, set this to false
    public $incrementing = true;

    // The attributes that are mass assignable
    protected $fillable = [
        'nama',
        'nis',
        'nilaikeseluruhan',
    ];

    // The attributes that should be hidden for serialization
    protected $hidden = [
        // Add any fields you don't want to be included in JSON responses
    ];

  

//     // Relationship to 
    //     return $this->belongsTo(Rayon::class, 'rayon', 'id');
    // }
}