# Website Perpustakaan beserta Admin Panel
Website untuk menampilkan informasi perpustakaan beserta data buku yang tersedia, yang akan diatur melalui admin panel.

## Deskripsi
Website ini memungkinkan pengguna untuk mengetahui berbagai informasi perpustakaan UNIMA, juga dengan Data Buku yang tersedia di Perpustakaan UNIMA.

## Fitur
- Home : Menampilkan deskripsi singkat tentang Perpustakaan UNIMA
- Visi & Misi : Menampilkan visi dan misi dari Perpustakaan UNIMA
- Struktur : Menampilkan struktur organisasi yang mengelola Perpustakaan UNIMA
- Pegawai : Menampilkan data pegawai yang bekerja di Perpustakaan UNIMA
- Buku : Menampilkan data buku yang tersedia di Perpustakaan UNIMA
- Galeri : Menampilkan foto tentang Perpustakaan UNIMA
- Kontak : Menampilkan Formulir Registasi Anggota Perpustakaan, Titik Koordinat Perpustakaan dan juga informasi kontak beserta jadwal Perpustakaan UNIMA

## Teknologi yang Digunakan

[![PHP](https://img.shields.io/badge/PHP-8.x-blue)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-8.x-orange)](https://laravel.com/)
[![Node.js](https://img.shields.io/badge/Node.js-v16.x-green)](https://nodejs.org/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-v2.0-blue)](https://tailwindcss.com/)
[![TablePlus](https://img.shields.io/badge/TablePlus-v4.0-yellow)](https://tableplus.com/)
[![SQLite](https://img.shields.io/badge/SQLite-3.x-blue)](https://www.sqlite.org/)

## Instalasi
Langkah-langkah untuk menginstal dan menjalankan proyek di lingkungan lokal.

1. Clone repository ini
    ```bash
    git clone https://github.com/gilbertsimbolon/website-perpustakaan.git
    ```
2. Masuk ke dalam folder proyek
    ```bash
    cd website-perpustakaan
    ```
3. Install dependensi menggunakan composer
    ```bash
    composer install
    ```
4. Buat file `.env` dan sesuaikan dengan konfigurasi lingkungan lokalmu
    ```bash
    cp .env.example .env
    ```
5. Generate key aplikasi
    ```bash
    php artisan key:generate
    ```
6. Jalankan migrasi database
    ```bash
    php artisan migrate
    ```
7. Jalankan 
    ```bash
    php artisan serve
    ```

## Kontribusi

Kami sangat menghargai kontribusi dari pengembang lain! Jika kamu ingin berkontribusi, silakan ikuti langkah-langkah berikut:

1. Fork repository ini ke akun GitHub-mu.
2. Buat branch baru untuk fitur atau perbaikan yang ingin kamu buat (`git checkout -b fitur-baru`).
3. Lakukan perubahan yang diperlukan.
4. Commit perubahan dengan deskripsi yang jelas (`git commit -m 'Menambahkan fitur baru'`).
5. Push perubahan ke repository fork-mu (`git push origin fitur-baru`).
6. Kirim Pull Request ke repository utama.

## Kontak

Jika ada pertanyaan atau masukan, kamu bisa menghubungi kami melalui:

- Nama: Gilbert Simbolon
- Email: gilbertttsimbolon@gmail.com
- GitHub: [https://github.com/gilbertsimbolon](https://github.com/gilbertsimbolon)
- Instagram: [@gilbertsmbln](https://instagram.com/gilbertsmbln)
