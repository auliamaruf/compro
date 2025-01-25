<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'nama_perusahaan',
        'alamat',
        'telepon',
        'email',
        'sosial_media_1',
        'sosial_media_2',
        'sosial_media_3',
        'sosial_media_4',
        'deskripsi',
        'visi',
        'misi',
        'jam_operasional',
  
    ];
}