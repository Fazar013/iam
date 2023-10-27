<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.home.index', [
            'title' => 'Dashboard - ' . config('app.name'),
        ]);
    }
}