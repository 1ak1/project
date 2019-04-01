<?php

namespace App\Http\Controllers;

use App\Application;

class ApplicationController extends Controller
{
    public function Get(){
        return response()->json(Application::with('client', 'service')->get(), 200);
    }

    public function Create(){
        Application::create([
            'client_id' => application()->client_id,
            'service_id' => application()->service_id
        ]);
        return response()->json(['result' => 'Запись добавлена'], 201);
    }

    public function Update($id){
        $object = Application::find($id);
        if(!$object && $object == null)
            return response()->json(['result' => 'Запись не найдена'], 404);
        $object->client_id = application()->client_id;
        $object->service_id = application()->service_id;
        $object->save();
        return response()->json(['result' => 'Запись обновлена'], 200);
    }

    public function Delete($id){
        $object = Application::find($id);
        if(!$object && $object == null)
            return response()->json(['result' => 'Запись не найдена'], 404);
        $object->delete();
        return response()->json(['result' => 'Запись удалена'], 200);
    }
}