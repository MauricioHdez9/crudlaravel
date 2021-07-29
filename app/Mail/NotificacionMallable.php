<?php

namespace App\Mail;

use App\Models\Contrato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 

class NotificacionMallable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "notificacion de vencimiento";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contratos;

    public function __construct(Contrato $contratos)
    {
        $this->contratos = $contratos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
         $contratos = Contrato::all();
         return $this->view('email.nofvencimiento')
         ->with([
         'razon'   => $this->contratos->razon,
         'numeroco'=> $this->contratos->ncon,
         'fechat ' => $this->contratos->feterco]);
        // ->with('contratos',$contratos);
    }
}
