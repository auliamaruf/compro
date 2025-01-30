<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TarifAir extends Model
{
    use HasFactory;

    protected $table = 'tarif_air';

    protected $fillable = [
        'golongan',
        'sub_golongan',
        'tarif_0_10',
        'tarif_11_20',
        'tarif_21_30',
        'tarif_lebih_30'
    ];

    protected $casts = [
        'tarif_0_10' => 'integer',
        'tarif_11_20' => 'integer',
        'tarif_21_30' => 'integer',
        'tarif_lebih_30' => 'integer',
    ];

    public static function rules()
    {
        return [
            'golongan' => 'required|string|max:255',
            'sub_golongan' => 'required|string|max:255',
            'tarif_0_10' => 'required|integer|min:0',
            'tarif_11_20' => 'required|integer|min:0',
            'tarif_21_30' => 'required|integer|min:0',
            'tarif_lebih_30' => 'required|integer|min:0',
        ];
    }
}
