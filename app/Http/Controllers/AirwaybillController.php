<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirwaybillController extends Controller
{
    public function create()
    {
        return view('pages.airwaybill.create');
    }
}
