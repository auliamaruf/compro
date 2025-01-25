<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchProfile extends Model
{
    use HasFactory;

    protected $table = 'branch_profiles'; // Nama tabel

    protected $fillable = [
        'branch_name', 
        'branch_head_name', 
        'branch_address', 
        'branch_phone', 
        'branch_email',
    ];

    // Jika ingin menambahkan validasi atau relasi dengan model lain
}