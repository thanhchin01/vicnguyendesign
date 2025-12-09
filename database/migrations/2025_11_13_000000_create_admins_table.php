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
        // Bảng user của admin
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('avatar');
            $table->integer('gender');
            $table->string('date_of_birth');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
        Schema::table('admins', function (Blueprint $table) {
            $table->rememberToken()->after('password');
        });
    }
};
