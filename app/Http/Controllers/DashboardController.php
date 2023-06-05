<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('backend.pages.dashboard', ["type"=>"full-view"]);
    }

    public function action_item() {
        return view('backend.pages.action_item');
    }
}
