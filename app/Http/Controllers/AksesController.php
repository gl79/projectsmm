<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AksesController extends Controller
{
    public function index($nama)
    {
        return $nama;
    }

}
