<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\BlogComment;

class Blog extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'excerpt', 'image',
        'status', 'category', 'tags', 'author', 'author_photo',
        'meta_title', 'meta_description',
    ];

    protected static function booted(): void
    {
        static::creating(function (Blog $blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
