<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Verifikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9fb; /* Warna latar belakang yang lembut */
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            background-color: #4CAF50; /* Warna hijau yang konsisten */
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .email-body {
            padding: 25px;
            color: #333333;
            font-size: 1rem;
            line-height: 1.6;
        }
        .email-body p {
            margin-bottom: 20px;
        }
        .verification-code {
            display: inline-block;
            background-color: #4CAF50; /* Warna hijau yang sama */
            color: #ffffff;
            padding: 10px 30px;
            border-radius: 8px;
            font-size: 1.2rem;
            text-align: center;
            font-weight: bold;
            letter-spacing: 1.5px;
            margin: 20px 0;
        }
        .email-footer {
            text-align: center;
            font-size: 0.875rem;
            color: #999999;
            padding: 15px;
            border-top: 1px solid #eeeeee;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            Kode Verifikasi Anda
        </div>
        <div class="email-body">
            <p>Halo {{ $user->nama }},</p>
            <p>Terima kasih telah mendaftar di <strong>{{ config('app.name') }}</strong>. Untuk menyelesaikan proses pendaftaran Anda, silakan gunakan kode verifikasi di bawah ini:</p>
            <div class="verification-code">{{ $verificationCode }}</div>
            <p>Jika Anda tidak melakukan pendaftaran ini, abaikan saja email ini.</p>
        </div>
        <div class="email-footer">
            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
