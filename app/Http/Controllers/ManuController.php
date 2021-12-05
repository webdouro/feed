<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManuController extends Controller
{
    public function clear()
    {
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        \Artisan::call('route:clear');
        return 0;
    }
}
