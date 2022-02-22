<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return "slug";
    }

}

