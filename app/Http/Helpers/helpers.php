<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

function legendaryart_notification($errors): void
{
    if (session()->has('message')) {
        echo '<div class="alert alert-' . session()->get('type') . '">' . session()->get('message') . '</div>';
    }

    if ($errors->any()) {
        echo '<div class="alert alert-danger">';
        foreach ($errors->all() as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</div>';
    }
}

// Image Link
function legendaryart_thumbnail($name)
{
    if (filter_var($name, FILTER_VALIDATE_URL)) {
        return $name;
    } elseif ($name === null) {
        return asset('storage/images/default.jpg');
    }
    return asset('storage/images/' . $name);
}

function legendaryart_image_process($request, $name)
{
    if ($request->hasFile($name)) {
        $validator = Validator::make($request->all(), [
            $name => 'image',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        $imgName = sprintf('%s.%s', Str::random(10), $request->file($name)->extension());
        $request->file($name)->storeAs('images', $imgName);
    } else {
        $thumbUrl = "{$name}_url";

        if ($request->$thumbUrl) {
            if (!filter_var($request->$thumbUrl, FILTER_VALIDATE_URL)) {
                return "Invalid URL format for image.";
            }

            $imgName = $request->$thumbUrl;
        } else {
            $imgName = 'default.jpg';
        }
    }

    return $imgName;
}

// Check Selected
function legendaryart_selected($post, $item): string
{
    return ($post === $item) ? 'selected' : '';
}

// Get Setting Value
function setting($key)
{
    return optional(DB::table('settings')->where('key', $key)->first())->value;
}
