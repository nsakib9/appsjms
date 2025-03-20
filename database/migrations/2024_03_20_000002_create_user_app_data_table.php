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
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('app_tool_id')->constrained('app_tools')->cascadeOnDelete();
            $table->json('input_data');
            $table->longText('output_data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_app_data');
    }
};
