<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TarifAbonemen extends Model
{
    use HasFactory;

    protected $table = 'tarif_abonemen';

    protected $fillable = [
        'golongan',
        'sub_golongan',
        'tarif'
    ];

    protected $casts = [
        'tarif' => 'integer'
    ];

    public static function rules()
    {
        return [
            'golongan' => 'required|string|max:255',
            'sub_golongan' => 'required|string|max:255',
            'tarif' => 'required|integer|min:0'
        ];
    }
}
