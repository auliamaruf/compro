<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterSource extends Model
{
    use HasFactory;

    protected $table = 'water_sources';

    protected $fillable = [
        'source_name',
        'source_code',
        'source_type',
        'source_status',
        'capacity_flow_lps',
        'village',
        'district',
        'city',
        'province',
        'latitude',
        'longitude',
        'elevation_masl',
        'manager',
        'exploration_year',
        'operational_year',
        'utilization_system',
        'number_of_pumps',
        'ownership_status',
        'notes',
    ];

    protected $casts = [
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
        'elevation_masl' => 'decimal:2',
        'capacity_flow_lps' => 'decimal:2',
        'exploration_year' => 'integer',
        'operational_year' => 'integer',
        'number_of_pumps' => 'integer',
    ];
}
