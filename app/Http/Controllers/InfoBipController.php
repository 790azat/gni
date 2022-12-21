<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Infobip\Api\SendSmsApi;
use Infobip\Configuration;
use Infobip\Model\SmsAdvancedTextualRequest;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Throwable;
use GuzzleHttp;

class InfoBipController extends Controller
{

    public function index(Request $request) {

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->save();

        $number = '374' . $request->phone;
        $code = Auth::user()->phone_temp_key;

        $configuration = (new Configuration())
            ->setHost('xr83y3.api.infobip.com')
            ->setApiKeyPrefix('Authorization', 'App')
            ->setApiKey('Authorization', '3ade22baab3e350e81ca9c2ca611f5a1-9d386cb0-4349-4867-ae74-dbb32ea62378');

        $client = new GuzzleHttp\Client();

        $sendSmsApi = new SendSMSApi($client, $configuration);
        $destination = (new SmsDestination())->setTo($number);
        $message = (new SmsTextualMessage())
            ->setFrom('Gni.am')
            ->setText('Gni.am Ձեր կոդն է - ' . $code)
            ->setDestinations([$destination]);
        $request = (new SmsAdvancedTextualRequest())
            ->setMessages([$message]);

        try {
            $smsResponse = $sendSmsApi->sendSmsMessage($request);
        } catch (Throwable $apiException) {

        }

        return back()->with('alert','primary%Նամակը ուղղարկվել է Ձեր համարին');

    }

    public function send($reg_number,$reg_code) {

        $number = '374' . $reg_number;
        $code = $reg_code;

        $configuration = (new Configuration())
            ->setHost('xr83y3.api.infobip.com')
            ->setApiKeyPrefix('Authorization', 'App')
            ->setApiKey('Authorization', '3ade22baab3e350e81ca9c2ca611f5a1-9d386cb0-4349-4867-ae74-dbb32ea62378');

        $client = new GuzzleHttp\Client();

        $sendSmsApi = new SendSMSApi($client, $configuration);
        $destination = (new SmsDestination())->setTo($number);
        $message = (new SmsTextualMessage())
            ->setFrom('Gni.am')
            ->setText('Gni.am Ձեր կոդն է - ' . $code)
            ->setDestinations([$destination]);
        $request = (new SmsAdvancedTextualRequest())
            ->setMessages([$message]);

        try {
            $smsResponse = $sendSmsApi->sendSmsMessage($request);
        } catch (Throwable $apiException) {

        }

        return back()->with('alert','primary%Նամակը ուղղարկվել է Ձեր համարին');
    }

}
