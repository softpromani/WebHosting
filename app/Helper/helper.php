<?php
use App\Models\WebSetting;
function settingValue($key)
{
    $data = WebSetting::where('key', $key)->first();
    if (!$data) {
        return 'N/A';
    } else {
        return $data->value;
    }
}

function adjustBrightness($hex, $steps) {
    $hex = str_replace('#', '', $hex);
    $steps = max(-255, min(255, $steps));

    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));

    $r = max(0, min(255, $r + $steps));
    $g = max(0, min(255, $g + $steps));
    $b = max(0, min(255, $b + $steps));

    return sprintf("#%02x%02x%02x", $r, $g, $b);
}
