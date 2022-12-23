<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class InvoiceOrderMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
   
    public function __construct($order)
    {
        $this->order = $order;
    }

   
    public function envelope()
    {
        return new Envelope(
            from: new Address('sendmailprod.dev@gmail.com', 'Jeffrey Way'),
            subject: 'Order Shipped',
        );
    }

    public function content()
    {
        return new Content(
            view: 'admin.invoice.generate-invoice',
        );
    }
   
}
