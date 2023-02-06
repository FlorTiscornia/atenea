<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Validator;

class ValidateformController extends Controller
{
    public function saveData(Request $request){

        $fields = [
            "name"=>"required",
            "surname"=>"required",
            "email"=>"required|email",
            "img"=>"required",
        ];

        $messages =[
            "name.required"=>"El nombre es requerido",
            "surname.required"=>"El apellido es requerido",
            "email.required"=>"El correo electrónico es requerido",
            'email.email'=>'El formato de su correo electrónico es incorrecto',
            "img.required"=>"La url de la imagen es requerida",
        ];  

        $validator = Validator::make($request->all(), $fields, $messages);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'name'=> $errors->get('name'),
                'surname'=> $errors->get('surname'),
                'email'=> $errors->get('email'),
                'img'=> $errors->get('img'),
                'alert' => 'danger'
            ]);
        }

        return response()->json([
            "alert"=>"success"
        ]);
    }
}