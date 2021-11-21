<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailCliente extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $param;
    public function __construct($param = null)
    {
        $this->param =  $param;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aimee.r10@aluno.ifsc.edu.br')
            ->subject('Envio de email')
            ->view('emails.client_list')
            ->with([
                'clientes' => $this->param['clientes']
            ]);
    }
}
