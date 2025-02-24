<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function show($id)
    {
        $company = General::find($id);
        return view('components.navbar.index', compact('company'));
    }
}
