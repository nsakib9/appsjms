<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppTool extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'api_endpoint', 'status'];
    
    public function userAppData()
    {
        return $this->hasMany(UserAppData::class);
    }
}
