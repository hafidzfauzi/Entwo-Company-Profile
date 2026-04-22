<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Honeypot Check (Anti Bot)
        if ($request->filled('website_url')) {
            return redirect(url()->previous() . '#contact')->with('success', 'Message sent!');
        }

        // 2. Validasi
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|min:10',
        ]);

        $validated['ip_address'] = $request->ip();

        // 3. Simpan ke Supabase
        Contact::create($validated);

        // 4. Kirim Email Notifikasi
        try {
            // Ganti email di bawah ini dengan email kantor/tujuanmu
            Mail::to('hafidzfauzi021@gmail.com')->send(new ContactNotification($validated));
        } catch (\Exception $e) {
            // Jika email gagal dikirim (misal koneksi SMTP error), tetap sukses di database
            Log::error('Email sending failed: ' . $e->getMessage());
        }

        return redirect(url()->previous() . '#contact')->with('success', 'Pesan Anda berhasil terkirim. Tim ENTWO akan segera menghubungi Anda.');
    }
}
