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
            $table->string('slug')->unique();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('date')->nullable();
            $table->integer('status')->default(1); //1:hoàn thành, 2 chưa hoàn thành
            $table->string('acreage');
            $table->string('team_design');
            $table->foreignId('created_by')->constrained('admins')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('admins')->nullOnDelete();
            $table->foreignId('category_id')->constrained('projects_categories')->cascadeOnDelete();
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
