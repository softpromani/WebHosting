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
