<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Honeypot Check (Bot biasanya isi semua input)
        if ($request->filled('website_url')) {
            return back()->with('success', 'Message sent!'); // Sukses palsu buat bot
        }

        // 2. Validasi
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|min:10',
        ]);

        // Tambahkan IP Address untuk tracking
        $validated['ip_address'] = $request->ip();

        // 3. Simpan
        Contact::create($validated);

        // Redirect kembali dengan membawa ID section contact di URL
        return redirect(url()->previous() . '#contact')->with('success', 'Pesan Anda berhasil terkirim. Tim ENTWO akan segera menghubungi Anda.');
    }
}
