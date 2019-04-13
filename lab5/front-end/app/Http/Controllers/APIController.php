<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class APIController extends Controller
{
  public function AllClients()
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
                            ->request('GET', 'http://lab5/api/clients')
                            ->getBody(),
                      true);
    return view('clients', ['clients'=>$response['data']]);
  }
  public function OneClient($id)
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
        ->request('GET', 'http://lab5/api/clients/'.$id)
        ->getBody(),
        true);
    return view('client', ['client'=>$response['data'][0]]);
  }
  public function DeleteClient(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('DELETE', 'http://lab5/api/clients/'.$id);
    return redirect('/clients');
  }
  public function AddClient(Request $request)
  {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'http://lab5/api/clients/', [
        'form_params' => [
            'fio' => $request->input('fio'),
            ]
    ]);
    return redirect('/clients');
  }
  public function ChangeClient(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('PUT', 'http://lab5/api/clients/'.$id, [
        'form_params' => [
            'fio' => $request->input('fio'),
        ]
    ]);
    return redirect('/clients/'.$id);
  }
  public function AllServices()
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
        ->request('GET', 'http://lab5/api/services')
        ->getBody(),
        true);
    return view('services', ['services'=>$response['data']]);
  }
  public function OneService($id)
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
        ->request('GET', 'http://lab5/api/services/'.$id)
        ->getBody(),
        true);
    return view('service', ['service'=>$response['data'][0]]);
  }
  public function DeleteService(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('DELETE', 'http://lab5/api/services/'.$id);
    return redirect('/services');
  }
  public function AddService(Request $request)
  {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'http://lab5/api/services/', [
        'form_params' => [
            'name' => $request->input('name'),
        ]
    ]);
    return redirect('/services');
  }
  public function ChangeService(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('PUT', 'http://lab5/api/services/'.$id, [
        'form_params' => [
            'name' => $request->input('name'),
        ]
    ]);
    return redirect('/services/'.$id);
  }

  public function AllOrders()
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
        ->request('GET', 'http://lab5/api/orders')
        ->getBody(),
        true);
    return view('orders', ['orders'=>$response['data']]);
  }
  public function OneOrder($id)
  {
    $client = new \GuzzleHttp\Client();
    $response = json_decode($client
        ->request('GET', 'http://lab5/api/orders/'.$id)
        ->getBody(),
        true);
    return view('order', ['order'=>$response['data'][0]]);
  }
  public function DeleteOrder(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('DELETE', 'http://lab5/api/orders/'.$id);
    return redirect('/orders');
  }
  public function AddOrder(Request $request)
  {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'http://lab5/api/orders/', [
        'form_params' => [
            'client_id' => $request->input('client_id'),
            'service_id' => $request->input('service_id'),
            'date' => $request->input('date'),
        ]
    ]);
    return redirect('/orders');
  }
  public function ChangeOrder(Request $request)
  {
    $id = $request->input('id');
    $client = new \GuzzleHttp\Client();
    $response = $client->request('PUT', 'http://lab5/api/orders/'.$id, [
        'form_params' => [
            'client_id' => $request->input('client_id'),
            'service_id' => $request->input('service_id'),
            'date' => $request->input('date'),
        ]
    ]);
    return redirect('/orders/'.$id);
  }
}
