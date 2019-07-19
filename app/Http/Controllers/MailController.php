<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;
use App\PurchaseOrder;
use App\Client;

class MailController extends Controller
{
    public function sendMail()
    {
    	$ordenCompra = PurchaseOrder::find(3);
    	$email = $ordenCompra->client->user->email;
    	$email = 'jorgeayalaceval559@gmail.com';
    	Mail::to($email)->send(new SendMail($ordenCompra));
    }
}
