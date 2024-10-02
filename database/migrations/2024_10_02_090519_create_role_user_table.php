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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Khóa ngoại tới bảng users
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');  // Khóa ngoại tới bảng roles
            $table->timestamp('assigned_at')->nullable();  // Thời gian gán role
            $table->timestamp('expires_at')->nullable();  // Thời gian hết hạn role
            $table->boolean('is_active')->default(1);  // Trạng thái hoạt động của role
            $table->timestamps();  // Cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
