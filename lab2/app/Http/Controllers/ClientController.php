<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Application;

class ClientController extends Controller
{
    public function Get(){
        return response()->json(Client::all(), 200);
    }

    public function Create(Application $application){
        Client::create(['fio' => $application->fio]);
        return response()->json(['result' => 'Запись добавлена'], 201);
    }

    public function Update($id, Application $application){
        $object = Client::find($id);
        if(!$object && $object == null)
            return response()->json(['result' => 'Запись не найдена'], 404);
        $object->fio = $application->fio;
        $object->save();
        return response()->json(['result' => 'Запись обновлена'], 200);
    }

    public function Delete($id){
        $object = Client::find($id);
        if(!$object && $object == null)
            return response()->json(['result' => 'Запись не найдена'], 404);
        $object->delete();
        return response()->json(['result' => 'Запись удалена'], 200);
    }
}