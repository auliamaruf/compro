<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes; // Menggunakan SoftDeletes

    protected $fillable = ['name', 'description']; // Kolom yang bisa diisi

    // public function posts()
    // {
    //     return $this->hasMany(Post::class); // Relasi dengan Post
    // }
}