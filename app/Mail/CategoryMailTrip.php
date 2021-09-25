<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CategoryMailTrip extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $category;
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build():CategoryMailTrip
    {
        return $this->view('mail.welcome',[
            'category'=>$this->category
        ]);
    }
}
