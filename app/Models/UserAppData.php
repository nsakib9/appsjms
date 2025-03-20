<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'app_tool_id', 
        'name',
        'email',
        'job_title',
        'company_name',
        'skills',
        'generated_letter'
    ];

    protected $casts = ['input_data' => 'json'];
    
    public function appTool()
    {
        return $this->belongsTo(AppTool::class);
    }
}
