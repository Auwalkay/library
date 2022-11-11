<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckedInReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name,$title,$checked_out;

    public function __construct($name,$title,$checked_out)
    {
        $this->name = $name;
        $this->title= $title;
        $this->checked_out = $checked_out;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name=$this->name;
        $book=$this->title;
        $checked_out=$this->checked_out;

        //return $this->subject('Check-in Reminder')->view('emails.checkinReminder');
        return $this->subject('Check-in Reminder')->view('emails.checkinReminder',compact('name','book','checked_out'));
    }
}