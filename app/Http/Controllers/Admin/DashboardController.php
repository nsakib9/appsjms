<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppTool;
use App\Models\UserAppData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Admin Dashboard
    public function index()
    {
        $tools = AppTool::all();
        $userData = UserAppData::latest()->get();
        return view('admin.dashboard', compact('tools', 'userData'));
    }

    // Tools Edit
    public function edit(AppTool $tool)
    {
        return view('admin.tools.edit', compact('tool'));
    }

    // Tools Update
    public function update(Request $request, AppTool $tool)
    {
        $tool->update($request->only(['name', 'description', 'status']));
        return redirect()->route('admin.dashboard')->with('success', 'Tool Updated!');
    }
}
