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
        // dự án
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image_url');
            $table->string('description');
            $table->string('address');
            $table->string('date');
            $table->integer('status')->default(1); //1:hoàn thành, 2 chưa hoàn thành
            $table->string('acreage');
            $table->string('team_design');
            $table->string('created_by');
            $table->string('updated_by');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
