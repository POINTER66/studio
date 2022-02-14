<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function settings(){
        return view('settings_form');
    }

    public function settings_process(Request $data){
        $valid = $data->validate([
            'name' => ['required', 'min:5', 'max:15', 'string'],
            'description' => ['required', 'min:5', 'max:55', 'string']
        ]);
        return 123;
    }
}
