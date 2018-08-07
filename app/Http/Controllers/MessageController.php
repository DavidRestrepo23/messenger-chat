<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class MessageController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        return Message::select(
            'id',
            DB::Raw("IF(`from_id`=$userId, TRUE, FALSE) as written_by_me"),
            'created_at',
            'content'
        )->get();

    }

    public function store(Request $request)
    {
        $messages = Message::create([
            'from_id' => auth()->id(),
            'to_id' => $request->to_id,
            'content' => $request->content,
        ]);

        return response()->json([
            'data' => 'ok'
        ], 200);
    }
}
