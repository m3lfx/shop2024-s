<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()->role !== 'admin') {
            return 'unauthorized';
        }
        return 'admin';
    }
}
