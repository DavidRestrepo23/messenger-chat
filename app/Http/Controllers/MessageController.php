<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class MessageController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();
        $contactId = $request->contact_id;

        return Message::select(
            'id',
            DB::Raw("IF(`from_id`=$userId, TRUE, FALSE) as written_by_me"),
            'created_at',
            'content'
        )->where(function ($q) use ($userId, $contactId) {
            $q->where('from_id', $userId)->where('to_id', $contactId);
        })->orWhere(function ($q) use ($userId, $contactId) {
            $q->where('from_id', $contactId)->where('to_id', $userId);
        })->get();

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
