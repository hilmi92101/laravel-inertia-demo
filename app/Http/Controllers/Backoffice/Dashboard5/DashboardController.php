<?php

namespace App\Http\Controllers\Backoffice\Dashboard5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Backoffice/Dashboard5/Index');
    }
}
