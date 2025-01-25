<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_name',
        'supervisor_id',
        'description',
    ];

    // Relasi ke supervisor
    public function supervisor()
    {
        return $this->belongsTo(OrganizationStructure::class, 'supervisor_id');
    }

    // Relasi ke bawahan (subordinate)
    public function subordinates()
    {
        return $this->hasMany(OrganizationStructure::class, 'supervisor_id');
    }
}