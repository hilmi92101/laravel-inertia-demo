<?php

namespace App\Http\Controllers\NoDB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('no-db');
    }
}
