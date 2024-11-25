<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function redirect()
    {
        return redirect()->away('https://app.fitcheck.nu');
    }

    public function google_forms()
    {
        return redirect()->away('https://docs.google.com/forms/d/e/1FAIpQLSeKU710LP3I_-ZCSGrINLt_lmIubLAriU7oYF9er5b_gQguQw/viewform?usp=sf_link');
    }
}