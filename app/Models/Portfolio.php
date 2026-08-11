<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'location',
        'year',
        'cover_image',
        'tagline',
        'client_challenge',
        'design_vision',
        'transformation_outcome',
        'gallery_images',
        'specifications',
        'is_featured',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'specifications' => 'array',
        'is_featured' => 'boolean',
    ];
}
