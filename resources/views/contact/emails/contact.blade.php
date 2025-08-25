<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Kontak Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 24px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 16px;
            color: #333;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 80px;
        }
        .value {
            margin-bottom: 12px;
            color: #555;
        }
        .message-box {
            background: #f4f4f4;
            padding: 12px;
            border-radius: 6px;
            white-space: pre-line;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Pesan Kontak Baru</div>
        <div class="value"><span class="label">Nama:</span> {{ $name }}</div>
        <div class="value"><span class="label">Email:</span> {{ $email }}</div>
        @if(!empty($subject))
            <div class="value"><span class="label">Subjek:</span> {{ $subject }}</div>
        @endif
        <div class="value">
            <span class="label">Pesan:</span>
            <div class="message-box">{{ $bodyMessage }}</div>
        </div>
    </div>
</body>
</html>
