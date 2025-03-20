<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GPTService;

class CoverLetterController extends Controller
{
    public function generate(Request $request, GPTService $gptService)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'job_title' => 'required',
            'company_name' => 'required',
            'skills' => 'required',
        ]);

        $prompt = "Write a cover letter for {$data['job_title']} at {$data['company_name']} with skills: {$data['skills']}.";

        $generatedLetter = $gptService->generateText($prompt);

        return view('frontend.apps.cover_letter', compact('generatedLetter'));
    }
}
