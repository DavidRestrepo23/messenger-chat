<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;
use App\Http\Resources\ConversationsCollection;

class ConversationController extends Controller
{
    /**
     * Obtiene las conversaciones del usuario autenticado
     */
    public function index()
    {
        return $conversations = Conversation::where('user_id', auth()->id())->get();
    }
}
