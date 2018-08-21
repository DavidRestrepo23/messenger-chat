<?php

namespace App\Observers;

use App\Message;
use App\Conversation;
use App\Events\MessageSent;

class MessageObserver
{
    /**
     * Handle the message "created" event.
     * Pasamos el objeto del mensaje que se creo, encontramos la conversación y actualizamos los campos last_message, y last_time
     * @param  \App\Message  $message
     * @return void
     */
    public function created(Message $message)
    {   


        //Quien envia
        $conversation = Conversation::where('user_id', $message->from_id)->where('contact_id', $message->to_id)->first();

        if ($conversation) {
            $conversation->last_message = "Tú: " . $message->content;
            $conversation->last_time = $message->created_at;
            $conversation->save();
        }

        //Quien recibe
        $conversation = Conversation::where('contact_id', $message->from_id)->where('user_id', $message->to_id)->first();

        if ($conversation) {
            $conversation->last_message = $conversation->contact_name . ": " . $message->content;
            $conversation->last_time = $message->created_at;
            $conversation->save();
        }

        event(new MessageSent($message));
    }
}
