<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $fillable = ['title', 'description', 'image', 'slug', 'user_id', 'album_id'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Scope for finding a photo by slug
    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
