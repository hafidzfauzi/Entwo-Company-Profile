<div style="font-family: sans-serif; color: #333; max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 10px;">
    <h2 style="color: #38BDF8;">Ada Pesan Baru dari Website ENTWO!</h2>
    <p>Halo Admin, seseorang baru saja mengisi form kontak:</p>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Nama:</strong></td>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Email:</strong></td>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Subject:</strong></td>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['subject'] ?? '-' }}</td>
        </tr>
    </table>
    <div style="margin-top: 20px; padding: 15px; bg-color: #f9f9f9; border-left: 4px solid #38BDF8;">
        <strong>Pesan:</strong><br>
        {{ $data['message'] }}
    </div>
    <p style="font-size: 12px; color: #999; margin-top: 30px;">Email dikirim otomatis dari sistem portal ENTWO.</p>
</div>
