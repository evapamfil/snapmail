<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use Illuminate\Http\Request;
use Mail;


class MessageController extends Controller
{
    public function create(Message $message, Request $request)
    {

        $data = [
            'key' => str_random(5),
            'email' => $request->email,
            'content' => $request->message,
        ];

        $message->key = $data['key'];
        $message->email = $data['email'];
        $message->message = $data['content'];

        $message->save();

        Mail::send('emails.link_email', $data, function ($m) use ($data) {
            $m->to($data['email']);
        });

        return view('emails.link_email', $data);

    }

    public function get(Message $message, Request $request)
    {
        $email = $message->where('key', $request->key)->firstOrFail();
        $data = [
            'email' => $email->email,
            'content' => $email->message,
        ];
        $email->delete();

        return view('emails.template_email', $data);
    }
}
