<?php

namespace App\View\Components;

use App\Models\General;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public function render()
    {
        $general = General::first();
        return view('layouts.app', compact('general'));
    }
}
