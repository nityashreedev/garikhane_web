<?php

namespace App\Libraries;


use App\SiteSetting;

class SiteVariable
{
    public static function get($key, $defaultValue = false) {

        $setting = SiteSetting::where('name', $key)->first();

        $return = isset($setting->value) ? $setting->value : 'EMPTY_DATA';

        if($return != 'EMPTY_DATA') {
            return $return;
        }

        return $defaultValue;
    }

    public static function set($key, $value) {

        $siteSetting = SiteSetting::where('name', $key)->first();
        if ($siteSetting) {

            $newInput['value'] = $value;
            $siteSetting->fill($newInput)->save();

        } else {
            $data = [
                'name' => $key,
                'value' => $value,

            ];
            SiteSetting::create($data);
        }

        return true;
    }
}