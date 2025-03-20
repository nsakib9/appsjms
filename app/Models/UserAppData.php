<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppData extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'app_tool_id', 'input_data', 'output_data'];

    protected $casts = ['input_data' => 'json'];
}
