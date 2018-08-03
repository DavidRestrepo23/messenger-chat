<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function index(){
        return Message::all();
    }
}
