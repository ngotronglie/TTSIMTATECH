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
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->string('name');  // Tên người dùng
            $table->string('email')->unique();  // Email (không trùng lặp)
            $table->string('password');  // Mật khẩu
            $table->string('avatar')->nullable();  // Avatar (có thể là NULL)
            $table->boolean('is_active')->default(1);  // Trạng thái tài khoản (mặc định là hoạt động)
            $table->string('social_provider')->nullable();  // Tên nhà cung cấp dịch vụ mạng xã hội (nếu có)
            $table->string('social_id')->nullable();  // ID từ nhà cung cấp mạng xã hội (nếu có)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
