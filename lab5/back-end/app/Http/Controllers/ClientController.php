<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
  public function all()
  {
    $clients = DB::select('CALL `getclients`()');
    return response()->json([
        'data' => $clients
    ], 200);
  }

  public function one($id)
  {
    $client = DB::select('CALL `getclient`(?)', [$id]);
    return response()->json([
        'data' => $client
    ], 200);
  }

  public function store(Request $request)
  {
    $fio = $request->input('fio');
    DB::statement('CALL `addclient`(?)', [$fio]);
    return response()->json([
        'data' => true
    ], 200);
  }

  public function delete($id)
  {
    DB::statement('CALL `deleteclient`(?)', [$id]);
    return response()->json([
        'data' => true
    ], 200);
  }

  public function change(Request $request, $id)
  {
    $fio = $request->input('fio');
    DB::statement('CALL `changeclient`(?,?)', [$fio, $id]);
    return response()->json([
        'data' => true
    ], 200);
  }


}
