<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SmsGatewayVonage extends Controller
{
    
    public function smsGateway(Request $request){
        $basic  = new \Vonage\Client\Credentials\Basic("e42e7c72", "LDk1cmr5HGd4FG9f");
        $client = new \Vonage\Client($basic);
        $pesan = $request->pesan;
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("6289614110279", "Azi Rahayu", $pesan)
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
