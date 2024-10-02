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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // Khóa chính tự động tăng
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Khóa ngoại tới bảng users
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');  // Khóa ngoại tới bảng categories
            $table->string('title');  // Tiêu đề bài viết
            $table->string('slug');  // Slug cho URL thân thiện
            $table->string('image')->nullable();  // Hình ảnh bài viết
            $table->text('content');  // Nội dung bài viết
            $table->boolean('is_featured')->default(0);  // Xác định bài viết nổi bật
            $table->boolean('is_active')->default(1);  // Trạng thái hoạt động của bài viết
            $table->bigInteger('views')->default(0);  // Số lượt xem
            $table->timestamps();  // Cột created_at và updated_a
            $table->softDeletes(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
