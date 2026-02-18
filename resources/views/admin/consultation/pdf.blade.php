<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
            color: #111;
        }

        .header {
            width: 100%;
            margin-bottom: 10px;
        }

        .header table {
            width: 100%;
            border-collapse: collapse;
        }

        .header img {
            width: 90px;
        }

        .company-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .company-info {
            font-size: 11px;
            color: #444;
            line-height: 1.4;
        }

        .divider {
            border-bottom: 2px solid #000;
            margin: 8px 0 15px;
        }

        .section-title {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .meta-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
        }

        .meta-table td {
            padding: 4px 0;
            vertical-align: top;
        }

        .content-box {
            border: 1px solid #ddd;
            padding: 10px;
            min-height: 120px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 10px;
            color: #666;
            text-align: right;
        }

        .signature-section {
            margin-top: 50px;
            width: 100%;
        }

        .signature-box {
            width: 45%;
            float: right;
            text-align: center;
            font-size: 12px;
        }

        .signature-space {
            margin-top: 60px;
            border-bottom: 1px solid #000;
            width: 100%;
        }
    </style>
</head>
<body>

{{-- HEADER / KOP SURAT --}}
<div class="header">
    <table>
        <tr>
            <td width="20%">
                <img src="{{ public_path('images/logo.png') }}">
            </td>
            <td width="80%" align="center">
                <div class="company-name">
                    CV. Parama Multi Konsultan
                </div>
                <div class="company-info">
                    Konsultan Manajemen & Perencanaan<br>
                    Anggota INKINDO<br>
                    Email: info@paramamultikonsultan.co.id<br>
                    Telp: 08xxxxxxxx
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="divider"></div>

{{-- JUDUL --}}
<div class="section-title">
    Laporan Konsultasi Client
</div>

{{-- META DATA --}}
<table class="meta-table">
    <tr>
        <td width="25%"><strong>Nama Client</strong></td>
        <td width="75%">: {{ $consultation->user->name }}</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>: {{ $consultation->user->email }}</td>
    </tr>
    <tr>
        <td><strong>Status</strong></td>
        <td>: {{ strtoupper($consultation->status) }}</td>
    </tr>
    <tr>
        <td><strong>Tanggal</strong></td>
        <td>: {{ $consultation->created_at->format('d M Y') }}</td>
    </tr>
</table>

{{-- ISI KONSULTASI --}}
<div class="section-title">
    Isi Konsultasi
</div>

<div class="content-box">
    {!! nl2br(e($consultation->message)) !!}
</div>

{{-- TANDA TANGAN --}}
<div class="signature-section">
    <div class="signature-box">
        {{ now()->format('d F Y') }}<br><br>

        Mengetahui,<br>
        Direktur<br>
        CV. Parama Multi Konsultan

        <div class="signature-space"></div>
        <strong>Ir. Johan</strong>
    </div>
</div>


{{-- FOOTER --}}
<div class="footer">
    Dicetak pada {{ now()->format('d M Y H:i') }}
</div>

</body>
</html>
