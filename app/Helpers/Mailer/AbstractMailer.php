<?php namespace TGL\Helpers\Mailer;

use Illuminate\Support\Facades\Mail;

abstract class AbstractMailer
{
    public function sendTo($email, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function($message) use($email, $subject)
        {
            $message->to($email)
                ->subject($subject);
        });
    }
}