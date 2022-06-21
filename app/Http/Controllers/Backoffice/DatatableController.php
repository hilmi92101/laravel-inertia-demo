<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function index()
    {
        return inertia('Backoffice/Dashboard4/Datatable');
    }
}
