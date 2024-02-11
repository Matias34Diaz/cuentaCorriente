<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*invoke  lo utilizamos cuanod queremos adm una ruta unica */
    public function __invoke()
    {
        return view('home');
    }
}
