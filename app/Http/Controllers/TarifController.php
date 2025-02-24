<?php

namespace App\Http\Controllers;

use App\Models\TarifAbonemen;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function biayaTetap()
    {
        $biayaTetap = TarifAbonemen::all();
        return view('components.tarif.biaya-tetap', compact('biayaTetap'));
    }
}
