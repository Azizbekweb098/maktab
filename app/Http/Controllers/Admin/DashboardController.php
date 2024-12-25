<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\one_smena;

class DashboardController extends Controller
{
    public function index()
    {
        $one_smena = one_smena::all(); // Yoki kerakli modeldan ma'lumot oling
        return view('admin.dashboard', compact('one_smena'));
    }
}
