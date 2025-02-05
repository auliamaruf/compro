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
        'status', 'scheduled_publish_at'
    ];

    protected $casts = [
        'scheduled_publish_at' => 'datetime'
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

    // Add this method to the Post model
    public function scopePublished($query)
    {
        return $query->where(function($query) {
            $query->where('status', 'published')
                ->orWhere(function($query) {
                    $query->where('status', 'scheduled')
                          ->where('scheduled_publish_at', '<=', now());
                });
        });
    }

    protected static function booted()
    {
        static::saving(function ($post) {
            // Auto publish scheduled posts that have reached their publication date
            if ($post->status === 'scheduled' && $post->scheduled_publish_at <= now()) {
                $post->status = 'published';
            }
        });
    }
}