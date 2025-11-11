<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project__details', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('address');
            $table->string('time');
            $table->string('acreage');
            $table->string('status');
            $table->string('team_design');
            $table->integer('project_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project__details');
    }
};
