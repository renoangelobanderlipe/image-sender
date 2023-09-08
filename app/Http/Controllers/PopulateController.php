<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\HttpHelper;

class PopulateController extends Controller
{
  public function index()
  {
    set_time_limit(30000);
    $fileLocation = 'C:\Users\User\Desktop\reno-japan-teens';

    $helper = new FileHelper();
    $files = $helper->location($fileLocation)->execute()->getFileName();
    $test = json_encode(self::formatBody());
    // $params = json_decode($test);

    $helper = new HttpHelper();

    foreach ($files as $filename) {
      $helper->post($filename);
    }    //     foreach ($hatdog as $filename) {
    //       $body= json_encode(["data"=> "{'username':'tiro-ai','password':'tiro-ai','service_code':'oRfj8mTi','contributor':'anubis','content':{'type':'image','url':'https://labs.nmscreative.com/moderation-use-case-2-2023-08-09/{$filename}'},'additional':[]}"]);

    // dd($body);
    // }


    // return response()->json();

  }

  public function formatBody()
  {
    $url = "https://labs.nmscreative.com/moderation-use-case-2-2023-08-09/modv2-016.webp";

    return [
      'data' => [
        "username" => "tiro-ai",
        "password" => "tiro-ai",
        "service_code" => "oRfj8mTi",
        "contributor" => "anubis",
        "content" => [
          "type" => "image",
          "url" => $url,
        ],
        "additional" => []
      ]
    ];
  }
}
