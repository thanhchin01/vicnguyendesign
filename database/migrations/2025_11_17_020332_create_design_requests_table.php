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
        Schema::create('design_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('id_contacts');
            $table->string('project_type');
            $table->string('area');
            $table->string('scale');
            $table->string('location');
            $table->string('investment_cost'); // Nhà ở – Chi phí dự trù đầu tư
            $table->string('people'); // số người sinh hoạt
            $table->string('expected_rooms'); //Số phòng mong muốn
            $table->string('other_construction'); //Công trình khác
            $table->string('function_description'); //Mô tả chức năng
            $table->string('design_speed'); //Tiến độ mong muốn thiết kế
            $table->string('complete_speed'); //Tiến độ mong muốn hoàn thiện
            $table->string('habits'); //Sở thích thói quen
            $table->string('referral_source'); //Vì sao biết VIC
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design_requests');
    }
};
