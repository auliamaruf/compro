<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $general = General::first();
        $recipientEmail = $general->email;

        try {
            Mail::send('emails.contact', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'messageContent' => $request->message
            ], function($message) use ($recipientEmail, $request) {
                $message->to($recipientEmail)
                        ->subject('Pesan Kontak: ' . $request->subject);
            });

            return response()->json(['message' => 'Email berhasil dikirim'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal mengirim email'], 500);
        }
    }
}
