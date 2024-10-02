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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Khóa ngoại tới bảng users
            $table->string('position');  // Vị trí quảng cáo
            $table->string('image');  // Hình ảnh quảng cáo
            $table->string('link');  // Link quảng cáo
            $table->dateTime('start_date');  // Ngày bắt đầu
            $table->dateTime('end_date');  // Ngày kết thúc
            $table->boolean('is_active')->default(1);  // Trạng thái hoạt động của quảng cáo
            $table->timestamps();  // Cột created_at và updated_at
            $table->softDeletes();  // Cột deleted_at cho xóa mềm
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
