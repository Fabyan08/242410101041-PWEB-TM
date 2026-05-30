# LibMate - Sistem Peminjaman Ruang Perpustakaan Universitas Jember

**LibMate** adalah platform sistem pemesanan ruang terintegrasi berbasis web yang dirancang khusus untuk mendigitalkan proses peminjaman ruang diskusi di Perpustakaan Universitas Jember. Sistem ini memungkinkan mahasiswa untuk mencari, melihat katalog, dan memesan ruang dari mana saja secara *real-time*, memangkas birokrasi manual, dan menciptakan ekosistem akademik yang efisien.

**Dibuat oleh:** Fabyan Yastika Permana (NIM: 242410101041)
**Demo Video:** [Tonton di YouTube]( https://youtu.be/GMRoPqdP6CE )
**Live Website:** [libmate.fabyanyastika.my.id](https://libmate.fabyanyastika.my.id/)

---

## ✨ Fitur Utama

Aplikasi ini memadukan *user interface* yang modern dengan fungsionalitas yang komprehensif, baik untuk sisi Pengguna (Mahasiswa) maupun Admin:

### Fitur Mahasiswa:
* **Eksplorasi Katalog Ruangan:** Pencarian dinamis berbasis AJAX beserta filter tab ruangan yang mempermudah pencarian tanpa *reload* halaman.
* **Integrasi Cuaca Terkini:** Fitur cek cuaca *real-time* wilayah Jember untuk membantu pertimbangan waktu peminjaman.
* **Chatbot Asisten:** AI chatbot interaktif untuk memberikan panduan dan bantuan terkait cara pemesanan ruang.
* **Formulir Pengajuan & Riwayat:** Form reservasi interaktif yang langsung terhubung dengan profil pengguna untuk melacak riwayat *booking* (Pending, Disetujui, Ditolak, Dibatalkan, Selesai).
* **Dark Mode & Preferensi:** Pengaturan preferensi tema (Terang/Gelap) yang dapat disesuaikan dengan kenyamanan mata pengguna.

### Fitur Admin:
* **Dashboard Manajemen Lengkap:** Ringkasan statistik total ruang, pemesanan yang menunggu (pending), dan aktivitas harian.
* **Manajemen Data Ruang:** Fitur CRUD (Create, Read, Update, Delete) untuk katalog ruangan, lengkap dengan pengaturan kapasitas, lantai, kategori, dan fasilitas pendukung (AC, Proyektor, dll).
* **Manajemen Reservasi:** Persetujuan atau penolakan pengajuan peminjaman ruang dari mahasiswa.
* **Manajemen Mahasiswa & Suspensi:** Kontrol penuh atas data pengguna mahasiswa, termasuk fitur penangguhan akun (*Suspended*) jika terjadi pelanggaran aturan perpustakaan.
* **Manajemen Pesan (Kontak):** Membaca dan meninjau pesan, keluhan, atau *feedback* yang dikirim mahasiswa melalui form kontak.

---

## 🗄️ Struktur Database

Sistem ini menggunakan *database* relasional MySQL dengan tabel utama sebagai berikut:
1. `users`: Menyimpan data autentikasi (email, password enkripsi) serta *role* (admin/mahasiswa).
2. `ruangans`: Menyimpan detail entitas ruang (nama, lantai, kapasitas, kategori, gambar).
3. `peminjamans`: Mencatat alur transaksi pemesanan ruang (tanggal, jam mulai/selesai, keperluan, dan status persetujuan).
4. `fasilitas` & `fasilitas_ruangan`: Tabel master dan *pivot* untuk mengelola inventaris dalam ruangan.
5. `kontaks`: Menyimpan rekam pesan dari halaman hubungi kami.

---

## 🚀 Cara Instalasi & Menjalankan Aplikasi Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan **LibMate** di komputer/laptop Anda.

### 1. Persyaratan Sistem
Pastikan Anda sudah menginstal perangkat lunak berikut:
* **PHP** (Minimal versi 8.2)
* **Composer** (Untuk manajemen *library* PHP/Laravel)
* **Node.js & NPM** (Untuk *compile asset* frontend)
* **XAMPP / Laragon** (Sebagai *local web server* dan MySQL *database*)
* **Git** (Opsional, untuk *cloning* repositori)

### 2. Kloning Repositori
Buka Terminal / Command Prompt, lalu jalankan perintah berikut:
```bash
git clone <URL_REPOSITORI_GITHUB_ANDA>
cd libmate
```
### 3. Instalasi Dependensi (Backend & Frontend)
Unduh seluruh paket library yang dibutuhkan oleh aplikasi:

composer install
npm install

### 4. Konfigurasi Lingkungan (.env)
Salin file pengaturan lingkungan bawaan menjadi file utama:

cp .env.example .env

Buka file .env tersebut di code editor Anda (seperti VS Code), lalu sesuaikan bagian pengaturan database menjadi seperti ini:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=libmate
DB_USERNAME=root
DB_PASSWORD=

(Biarkan DB_PASSWORD kosong jika Anda menggunakan pengaturan bawaan XAMPP).

### 5. Generate Application Key
Jalankan perintah berikut untuk mengamankan session dan data:

php artisan key:generate

### 6. Import Database
Aplikasi ini sudah dilengkapi dengan file libmate.sql yang berisi struktur tabel dan data dummy awal.
1. Buka aplikasi XAMPP dan jalankan modul Apache dan MySQL.
2. Buka browser dan akses phpMyAdmin (http://localhost/phpmyadmin).
3. Buat database baru dengan nama libmate.
4. Klik database libmate yang baru dibuat, lalu pilih tab Import.
5. Klik Choose File, cari dan pilih file libmate.sql yang ada di dalam folder proyek ini.
6. Scroll ke bawah dan klik tombol Import atau Go. Tunggu hingga proses selesai.

(Catatan: Karena sudah meng-import SQL secara manual, TIDAK PERLU lagi menjalankan perintah php artisan migrate).

### 7. Build Assets & Jalankan Server
Buka dua tab Terminal atau Command Prompt secara bersamaan di dalam folder proyek Anda:

Terminal 1 (Untuk menjalankan proses kompilasi asset frontend/Tailwind CSS):
npm run dev

Terminal 2 (Untuk menyalakan server lokal Laravel):
php artisan serve

### 8. Akses Aplikasi
Setelah kedua server di atas aktif dan berjalan, buka web browser Anda (Chrome/Firefox/Edge) lalu kunjungi tautan berikut:
http://localhost:8000

-----------------------------------------------------------------
## 🔐 Akun Akses Default (Dummy untuk Uji Coba)
Berdasarkan data awal yang ada di dalam database libmate.sql, Anda dapat menggunakan akun-akun berikut untuk menguji fitur aplikasi:

Akun Percobaan:
- Email: yastikafabyan2005@gmail.com (Admin) | Password: adminadmin
- Email: 242410101041@mail.unej.ac.id (Status: Suspended - untuk simulasi akun yang ditangguhkan)  | Password: useruser
