<?php

use App\Models\User;
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
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->enum('pages', ['home', 'education', 'technology', 'latest_news', 'video', 'podcast', 'category', 'post_detail'])->default('home');
            $table->enum('position', ['header', 'middle', 'bottom', 'sidebar'])->default('header'); 
            $table->string('image'); 
            $table->string('link');
            $table->datetime('start_date'); 
            $table->datetime('end_date'); 
            $table->enum('status', ['draft', 'active', 'paused', 'completed'])->default('draft'); 
            $table->string('content')->nullable();
            $table->softDeletes();
            $table->timestamps(); 
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
