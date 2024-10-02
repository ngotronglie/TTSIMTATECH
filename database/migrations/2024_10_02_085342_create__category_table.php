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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();  // ID chính
            $table->string('name');  // Tên của category
            $table->string('slug');  // Slug để sử dụng cho URL
            $table->string('image')->nullable();  // Ảnh đại diện (có thể NULL)
            $table->boolean('is_active')->default(1);  // Trạng thái hoạt động (mặc định là 1 - active)
            $table->timestamps();  // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
