<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showAll() {
        $messages = Message::all();
        return $messages;
    }

    public function showByName($name) {
        $messages = Message::where('name', $name)
                            ->all();
        return $messages;
    }

    public function showByEmail($email) {
        $messages = Message::where('email', $email)
                            ->all();
        return $messages;
    }

    public function store(Request $request) {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();
    }
}
