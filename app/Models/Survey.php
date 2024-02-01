<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'user_id',
        'image',
        'title',
        'description',
        'expire_date',
        'status',
        'created_at',
        'updated_at'
    ];

    public function getSlugOptions() :SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
