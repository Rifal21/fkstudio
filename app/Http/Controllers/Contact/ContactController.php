<?php

namespace App\Http\Controllers\Contact;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;
use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        // $contact = Cockpit::first('contactme');
        // $form = Cockpit::first('contactform');
        return view('contact.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:1000',
        ]);

        $data = [
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'subject' => $request->input('subject', 'Pesan Kontak'),
            'message' => $request->input('message'),
        ];

        // Kirim ke queue
        SendContactEmail::dispatch($data);

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
    