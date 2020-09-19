<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms (Request $request)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic(env('NEXMO_API_KEY'), env('NEXMO_API_SECRET'));
        $client = new \Nexmo\Client($basic);

        // Nexmo::message()->send([
        //     'to' => '63' . $request->mobile,
        //     'from' => '16105552344',
        //     'text' => 'Using the facade to send a message'

        // ]);

        $message = $client->message()->send([
            'to' => '63' . $request->mobile,
            'from' => 'Vonage APIs',
            'text' => $request->mymssg,
        ]);

        return redirect ('home');

    }
}
