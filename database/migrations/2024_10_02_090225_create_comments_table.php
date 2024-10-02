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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Khóa ngoại tới bảng users
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');  // Khóa ngoại tới bảng posts
            $table->string('content');  // Nội dung bình luận
            $table->boolean('edited')->default(0);  // Đánh dấu đã chỉnh sửa
            $table->boolean('is_approve')->default(0);  // Đánh dấu được phê duyệt
            $table->boolean('is_hidden')->default(0);  // Đánh dấu bị ẩn
            $table->timestamps();  // Cột created_at và updated_at
            $table->softDeletes();  // Cột deleted_at cho xóa mềm
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
