<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationDashboardController extends Controller
{
    //
    public function index() {
        return view('organization_dashboard');
    }
}
