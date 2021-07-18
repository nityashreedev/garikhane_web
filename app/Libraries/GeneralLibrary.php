<?php

namespace App\Libraries;

use Config;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Image;
use Storage;

class GeneralLibrary
{
    public function __construct(Request $request)
    {

    }

    public static function sendMailWithConfig($config_type = 'default')
    {
        if ($config_type == 'default') {
            $prepend = '';

        } else {
            $prepend = $config_type . '-';}
            $config  = array(
                'driver'     => 'smtp',
                'host'       => DB::table('site_settings')->where('name', $prepend . 'SMTP_MAIL_HOST')->first()->value,
                'port'       => DB::table('site_settings')->where('name',  $prepend. 'SMTP_MAIL_PORT')->first()->value,
                //'from'       => array('address' => DB::table('site_settings')->where('name', $prepend . 'SMTP_MAIL_USERNAME')->first()->value, 'name' => 'BCMS'),
                //'encryption' => ( DB::table('site_settings')->where('name',  $prepend. 'SMTP_SSL_ENABLE')->first()->value == 0 ) ? false : 'tls',
				'encryption' => 'tls',
                'username'   => DB::table('site_settings')->where('name', $prepend . 'SMTP_MAIL_USERNAME')->first()->value,
                'password'   => Crypt::decryptString(DB::table('site_settings')->where('name', $prepend . 'SMTP_MAIL_PASSWORD')->first()->value),
                'sendmail'   => '/usr/sbin/sendmail -bs',
                //'pretend'    => false,
				'from'       => array('address' => 'donotreply@ebdaa.com', 'name' => 'EBDAA Business Continuity Solution'),
            );
            Config::set('mail', $config);


        return true;

    }
    public static function resizefitImage($image = 'null', $width = 200, $height = 200)
    {
        try {
            $filename = $width . '_' . $height . '_' . basename($image);

            if (Storage::disk('uploads')->exists($filename)) {
                return url("/uploads/temps/$filename");
            }

            $img = Image::make($image);
            // crop the best fitting 5:3 (600x360) ratio and resize to 600x360 pixel
            $img->fit($width, $height);
            $img->save(public_path() . "/uploads/temps/$filename");
            return url("/uploads/temps/$filename");
        } catch (\Exception $e) {
            return 'https://dummyimage.com/200x200/000/fff&text=NO+Image+FOUND';
        }
    }
}