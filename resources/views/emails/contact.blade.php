<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari {{ $data['name'] }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        .header {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border-radius: 12px 12px 0 0;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
        }
        .header p {
            color: rgba(255,255,255,0.8);
            margin: 5px 0 0;
        }
        .body {
            background: #ffffff;
            padding: 30px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .field {
            margin-bottom: 20px;
        }
        .field label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #6b7280;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 4px;
        }
        .field .value {
            font-size: 16px;
            color: #1f2937;
            font-weight: 500;
        }
        .message-box {
            background: #f8fafc;
            border-left: 4px solid #2563eb;
            padding: 16px 20px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .message-box p {
            margin: 0;
            line-height: 1.7;
            color: #374151;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            margin-top: 30px;
            border-top: 1px solid #e5e7eb;
            font-size: 13px;
            color: #9ca3af;
        }
        .badge {
            display: inline-block;
            background: #dbeafe;
            color: #2563eb;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📬 Pesan Baru</h1>
            <p>Dari halaman kontak SoftImagine</p>
        </div>
        <div class="body">
            <div class="field">
                <label>Nama</label>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            <div class="field">
                <label>Email</label>
                <div class="value">{{ $data['email'] }}</div>
            </div>
            @if($data['phone'])
            <div class="field">
                <label>Telepon</label>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            @endif
            <div class="field">
                <label>Subjek</label>
                <div class="value">
                    <span class="badge">{{ $data['subject'] }}</span>
                </div>
            </div>
            <div class="field">
                <label>Pesan</label>
                <div class="message-box">
                    <p>{{ $data['message'] }}</p>
                </div>
            </div>
            <div class="footer">
                <p>Email ini dikirim secara otomatis dari website SoftImagine.</p>
                <p>Silakan balas email ini atau hubungi {{ $data['name'] }} langsung.</p>
            </div>
        </div>
    </div>
</body>
</html>
