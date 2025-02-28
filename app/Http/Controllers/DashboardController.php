<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __construct()
    {
        View::share('main_menu', 'Dashboard');
        View::share('sub_menu', 'Dashboard');
    }
    public function index()
    {
        return \view('backend.pages.dashboard');
    }
}
