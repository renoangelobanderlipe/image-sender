<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use App\Contracts\HttpHelperContract;

class HttpHelper implements HttpHelperContract
{
  protected $url;
  protected $key;
  protected $endpoint;
  protected $headers;
  protected $body;

  public function domain(string $url)
  {
    $this->url = $url;

    return $this;
  }

  public function key(string $key)
  {
    $this->key = $key;

    return $this;
  }

  public function endpoint(string $endpoint)
  {
    $this->endpoint = $endpoint;

    return $this;
  }

  public function headers(array $headers)
  {
    $this->headers = $headers;

    return $this;
  }

  public function body(array $body)
  {
    $this->body = $body;

    return $this;
  }

  // "{"data":"{\"username\":\"tiro-ai\",\"password\":\"tiro-ai\",\"service_code\":\"oRfj8mTi\",\"contributor\":\"anubis\",\"content\":{\"type\":\"image\",\"url\":\"https:\/\/labs.nmscreative.com\/moderation-use-case-2-2023-08-09\/modv2-004.webp\"},\"additional\":[]}"}"

  // "{"data":"{'username':'tiro-ai','password':'tiro-ai','service_code':'oRfj8mTi','contributor':'anubis','content':{'type':'image','url':'https:\/\/labs.nmscreative.com\/moderation-use-case-2-2023-08-09\/modv2-004.webp'},'additional':[]}"}"
  public function post($filename)
  {
    $client = new Client(['verify' => false, 5000000000]);
    $headers = [
      'Content-Type' => 'application/json'
    ];

    $body = json_encode(["data" => '{"username":"tiro-ai","password":"tiro-ai","service_code":"oRfj8mTi","contributor":"anubis","content":{"type":"image","url":"https://labs.nmscreative.com/moderation-use-case-2-2023-08-09/' . $filename . '"},"additional":[]}']);

    $request = new Request('POST', 'https://staging.moderationv2.operatorplatform.com/api/content/send', $headers, $body);
    $res = $client->send($request);

    return $res->getBody();
  }
}

// $client = new Client();
// $headers = [
//   'Content-Type' => 'application/json'
// ];
// $body = '{
//   "data": {
//     "username": "tiro-ai",
//     "password": "tiro-ai",
//     "service_code": "oRfj8mTi",
//     "contributor": "anubis",
//     "content": {
//       "type": "image",
//       "url": "https://labs.nmscreative.com/moderation-use-case-2-2023-08-09/modv2-016.webp"
//     },
//     "additional": []
//   }
// }';
// $request = new Request('POST', 'https://staging.moderationv2.operatorplatform.com/api/content/send', $headers, $body);
// $res = $client->sendAsync($request)->wait();
// echo $res->getBody();
