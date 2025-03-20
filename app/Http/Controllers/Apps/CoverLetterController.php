<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GPTService;
use App\Models\AppTool;
use App\Models\UserAppData;

class CoverLetterController extends Controller
{
    public function generate(Request $request, GPTService $gptService)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'job_title' => 'required|string',
            'company_name' => 'required|string',
            'skills' => 'required|string',
        ]);

        $prompt = "Write a professional cover letter for {$data['job_title']} at {$data['company_name']} highlighting these skills: {$data['skills']}.";

        $generatedLetter = $gptService->generateText($prompt);

        $appTool = AppTool::where('slug', 'cover-letter-generator')->firstOrFail();

        // Create user app data with all required fields
        UserAppData::create([
            'app_tool_id' => $appTool->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'job_title' => $data['job_title'],
            'company_name' => $data['company_name'],
            'skills' => $data['skills'],
            'generated_letter' => $generatedLetter
        ]);

        return redirect()->back()->with('generatedLetter', $generatedLetter);
    }
}
