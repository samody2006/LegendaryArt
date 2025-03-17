<?php

// Model: App\Models\Setting.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'slug', 'display_name', 'value'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted(): void
    {
        static::creating(function ($setting) {
            $setting->slug = Str::slug($setting->key);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}


