<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logic to fetch sales figures for today, yesterday, this month, and last month

        return view('dashboard', [
            'todaySales' => $todaySales,
            'yesterdaySales' => $yesterdaySales,
        ]);
    }
}
