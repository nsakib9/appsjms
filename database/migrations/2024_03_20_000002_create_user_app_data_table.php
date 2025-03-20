<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_app_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_tool_id')->constrained('app_tools')->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('job_title');
            $table->string('company_name');
            $table->text('skills');
            $table->longText('generated_letter')->nullable(); // Allow null values
            $table->timestamps();
        });
        
        
    }

    public function down()
    {
        Schema::dropIfExists('user_app_data');
    }
};
