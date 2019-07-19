<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Address;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

  
    public $orden;

    public function __construct($ordenCompra)
    {

        $this->orden = $ordenCompra;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $orden = $this->orden;
        $cliente = $orden->client;
        $reservaciones = $orden->menuReservation;
        $total =0;
        foreach ($reservaciones as $reservation) {
            $total = $total + ($reservation->menu->total_price * $reservation->quantity);
        }
        $restaurant = $reservaciones[0]->menu->restaurant->name;

        $direccion = Address::all()->where('client_id',$cliente->id)->first();



        return $this->view('orderConfirmation',compact('orden','cliente','total','restaurant','direccion'));
    }
}
