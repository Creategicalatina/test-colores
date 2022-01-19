<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTestResult extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $img;
    protected $red;
    protected $blue;
    protected $yellow;
    protected $green;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        $email,
        $name,
        $img,
        $red,
        $blue,
        $yellow,
        $green
    ) {
        $this->email = $email;
        $this->name = $name;
        $this->img = $img;
        $this->red = $red;
        $this->blue = $blue;
        $this->yellow = $yellow;
        $this->green = $green;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->name)
            ->subject('Resultado test de personalidad')
            ->view('mail.send-test-result')
            ->with([
                'email' => $this->email,
                'name' => $this->name,
                'img' => $this->img,
                'red' => $this->red,
                'blue' => $this->blue,
                'yellow' => $this->yellow,
                'green' => $this->green
            ]);
    }
}
