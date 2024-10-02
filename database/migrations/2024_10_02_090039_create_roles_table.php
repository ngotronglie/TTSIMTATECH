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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->string('name');  // Tên role
            $table->string('description')->nullable();  // Mô tả role
            $table->boolean('is_active')->default(1);  // Trạng thái hoạt động của role
            $table->timestamps();  // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
