<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class MailController extends Controller
{
    public function sendMail()
    {
    	//$email = $get->email;
    	//$subject = $get->subject;
    	//$message = $get->message;
    	$email = 'jorgeayalaceval559@gmail.com';
    	$subject = 'Esto es el asunto';
    	$message = 'Contenido del mensaje';
    	Mail::to($email)->send(new SendMail($subject,$message));
    }
}
