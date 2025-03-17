<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'price', 'thumbnail'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Format price with currency symbol
    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 2);
    }
}

