<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipMasukController extends Controller
{
    public function index()
    {
        return view('admin.arsip_masuk');
    }

}
