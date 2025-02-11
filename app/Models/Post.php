<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'body', 'image', 'category_id', 'author_id',
        'status'
    ];

    // Relasi dengan kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan pengguna (author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Simplified published scope
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}