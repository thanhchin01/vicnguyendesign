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
        // Bảng trung gian của dự án và thành viên
        Schema::create('project_members', function (Blueprint $table) {
            $table->id();
            $table->integer('projects_id');
            $table->integer('members_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_members');
    }
};
