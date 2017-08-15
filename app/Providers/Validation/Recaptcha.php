<?php
namespace App\Providers\Validation;

use GuzzleHttp\Client;
use Illuminate\Validation\ValidationData;

/**
 * Created by PhpStorm.
 * User: ZAtaee
 * Date: 8/15/2017
 * Time: 9:08 AM
 */
class Recaptcha extends ValidationData
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client=new Client();
        $response = $client->request('POST','https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('services.recaptcha.secret'),
                'response' => $value,
                'remoteip' => request()->ip()
            ]
        ]);
        $response=json_decode($response->getBody());
        return $response->success;

    }
}

