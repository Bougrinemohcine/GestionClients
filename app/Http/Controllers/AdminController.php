<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.adminDashboard');  // Render the admin dashboard view
    }
    public function settings() {
        return view('admin.settings');
    }
}
