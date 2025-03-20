<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AppTool;

class HomeController extends Controller
{
    public function index()
    {
        $apps = AppTool::where('status', 'active')->get();
        return view('frontend.home', compact('apps'));
    }

    public function showApp($slug)
    {
        $app = AppTool::where('slug', $slug)->firstOrFail();
        return view('frontend.apps.app_page', compact('app'));
    }
}
