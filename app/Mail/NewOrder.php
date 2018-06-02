<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $messages, $url, $order, $name;

    /**
     * Create a new message instance.
     *
     * @param $url
     * @param $messages
     * @param $order
     * @param $name
     */
    public function __construct($url, $messages, $order, $name)
    {
        $this->url = $url;
        $this->messages = $messages;
        $this->order = $order;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your OrderNO - '.$this->order.' is Taken !!')
                    ->markdown('Emails.NewOrderCustomer',
                ['order' => $this->order, 'messages' => $this->messages, 'url' => $this->url, 'name' => $this->name]
            );
    }
}