<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota Perpustakaan</title>
</head>
<body>
    <h3>Halo {{ $record['nama'] }},</h3>
    <p>
        Pendaftaran anggota perpustakaan telah berhasil, dengan data dibawah ini.<br>
        Nama : {{ $record['nama'] }}<br>
        NIM : {{ $record['nim'] }}<br>
        Email Edukasi : {{ $record['email_edukasi'] }}<br>
        No. Handphone : {{ $record['no_hp'] }}<br>
        No. Whatsapp : {{ $record['no_wa'] }}<br>
        Fakultas : {{ $record['fakultas'] }}<br>
        Program Studi : {{ $record['program_studi'] }}<br>

        Silahkan kunjungi gedung Perpustakaan UNIMA, untuk mengambil Kartu Anggota Perpustakaan (KAP),<br>
        Syarat dan Ketentuan.<br>
        1. Slip UKT Asli<br>
        2. Pas Photo 2x3 2 Lembar<br>
    </p>
</body>
</html>
