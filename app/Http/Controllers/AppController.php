<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function redirect()
    {
        return redirect()->away('https://app.fitcheck.nu');
    }
}
