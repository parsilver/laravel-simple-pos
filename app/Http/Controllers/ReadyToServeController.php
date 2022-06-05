<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ReadyToServeController extends Controller
{

    /**
     * Show the application POS.
     */
    public function serve()
    {
        return Inertia::render('Serve');
    }
}
