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
        // Bảng thành viên
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('graduate');
            $table->date('join');
            $table->string('project');
            $table->string('award');
            $table->integer('status')->default(1); //1,Đang làm, 2 Dã nghỉ
            $table->integer('id_positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
