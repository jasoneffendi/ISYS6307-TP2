<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('dashboard/index', [
                'name' => Auth::user()->name,
                'role_id' => Auth::user()->role_id
            ]);
        } else {
            return redirect()->intended('login');
        }
    }
}