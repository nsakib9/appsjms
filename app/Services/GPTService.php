<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GPTService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.openai.api_key');
    }

    public function generateText($prompt)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        if ($response->successful()) {
            return $response->json()['choices'][0]['message']['content'] ?? 'Error generating content.';
        }

        return 'Error generating content: ' . $response->json('error.message', 'Unknown error.');
    }
}
