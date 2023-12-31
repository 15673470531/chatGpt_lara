<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function show(){
        return view('chat/show',[
            'name' => '我是chat模块'
        ]);
    }
}
