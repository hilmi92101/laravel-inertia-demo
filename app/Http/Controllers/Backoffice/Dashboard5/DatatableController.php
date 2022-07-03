<?php

namespace App\Http\Controllers\Backoffice\Dashboard5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function index()
    {
        return inertia('Backoffice/Dashboard5/Datatable');
    }
}
