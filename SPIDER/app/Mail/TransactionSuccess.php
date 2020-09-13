<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransactionSuccess extends Mailable
{
    use Queueable, SerializesModels;


    private $transactions;
    public function __construct($transactions)
    {
        $this->transactions = $transactions;
    }


    public function build()
    {
        return $this->view('emails.email_success_transaction')
            ->with(['shopping' => $this->transactions]);
    }
}
