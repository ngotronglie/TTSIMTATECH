<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug',
        'image', 
        'is_active',
        'click_count',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
}
