<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = ['title', 'slug', 'description'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Scope to find a contact info by slug
    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}

