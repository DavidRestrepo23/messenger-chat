<?php

namespace App\Http\Controllers;

use App\Conversation;
use Auth;
use Illuminate\Http\Request;

class ConversationController extends Controller
{   
    /**
     * Obtiene las conversaciones del usuario autenticado
     */
    public function index(){
        return Conversation::where('user_id', auth()->user()->id)->get();
    }
}
