<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Surat Bukti Donasi</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
        }

        .box {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">SURAT BUKTI DONASI</div>
        <p>No: {{ $invoice_number }}</p>
    </div>

    <div class="box">
        <p>Nama Donatur: {{ $donation->user->name ?? '-' }}</p>
        <p>Status: {{ $donation->status }}</p>
        <p>Tanggal Verifikasi: {{ $date->format('d M Y') }}</p>
    </div>

    <br><br>

    <p>Terima kasih atas donasi yang telah diberikan.</p>

    <br><br>
    <p>Admin</p>

</body>

</html>
