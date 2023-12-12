<?php
use App\Models\Calendar;
use App\Models\Document;
use App\Models\Events;
use App\Models\Settings;





function getImage($image, $size = null)
{
    $clean = '';

    if (file_exists($image) && is_file($image)) {
        return asset($image) . $clean;
    }

    if ($size) {
        return route('placeholder.image', $size);
    }

    return asset('assets/images/default.png');
}

function settings($key, $exeception = null)
{
    $setting = Settings::where('key', $key)->first();
    if ($setting) {
        return $setting->description;
    } else {
        return $exeception;
    }
}

function setting_list($key)
{
    $setting = Settings::select('description')->where('key', $key)->get();
    return $setting;
}

function setting_update($key, $update_value)
{
    $setting = Settings::where('key', $key)->firstOrFail();
    $setting->update([
        "description" => $update_value
    ]);
}
function social_icon()
{
    return Settings::where('key', 'social_icon')->get();
}

function getImageUrl($image)
{
    return env('APP_URL') . '/' . $image;
}