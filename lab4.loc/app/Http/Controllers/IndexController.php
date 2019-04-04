<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function answerApi()
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', 'www.mocky.io/v2/5c7db5e13100005a00375fda');
		$result = $response->getBody();
		$result = json_decode($result, true);
		$result = str_replace(' ', '_', $result['result']);
    return response()->json([
        'result' => $result
    ], 200);
	}
}
