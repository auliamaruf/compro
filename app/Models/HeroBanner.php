<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroBanner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hero_banners';

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'button_text',
        'button_link',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    // Scope untuk mendapatkan banner yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk mengurutkan banner berdasarkan order
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    // Get active and ordered banners
    public static function getActiveBanners()
    {
        return self::active()->ordered()->get();
    }
}
