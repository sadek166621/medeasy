<?php

namespace App\Utility;

use App\Models\SmsProvider;
use Twilio\Rest\Client;
class SendSMSUtility
{
    public static function sendSMS($to, $body)
    {
        $token = "108791651451712227905145a7143d466f0ad0507a1916c822254";
        $url = "http://api.greenweb.com.bd/api.php?json";
        $data= array(
            'to'=>"$to",
            'message'=>"$body",
            'token'=>"$token"
        );
        // dd($body);
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
    }

}
