<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Mail;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::send('contact.emails.contact', [
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'subject' => $this->data['subject'] ?? '',
            'bodyMessage' => $this->data['message'], // ✅ gunakan nama berbeda
        ], function ($mail) {
            $mail->to(Env::get('MAIL_FROM_ADDRESS'), Env::get('MAIL_FROM_NAME'))
                ->subject('Pesan Baru dari Website')
                ->replyTo($this->data['email'], $this->data['name']);
        });
    }
}
