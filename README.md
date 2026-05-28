# [cite_start]Libmate - Sistem Peminjaman Ruang Perpustakaan Universitas Jember [cite: 14]

[cite_start]Sistem digital berbasis web ini memungkinkan mahasiswa untuk mencari, melihat katalog, dan memesan ruang diskusi dari mana saja secara *real-time*, sehingga menciptakan ekosistem akademik yang jauh lebih efisien dan transparan[cite: 12].

[cite_start]**Oleh:** Fabyan Yastika Permana (NIM: 242410101041, Kelas A) [cite: 1, 2, 3]
[cite_start]**Link Demo:** [Tonton di YouTube](https://youtu.be/ZyXaq44cv8) [cite: 4]
[cite_start]**Link Website (Live):** [LibMate Hosting](https://libmate.fabyanyastika.my.id/) [cite: 5]

---

## 📖 Latar Belakang
[cite_start]Perpustakaan Universitas Jember memegang peran vital sebagai pusat kolaborasi akademik, namun tingginya kebutuhan akan fasilitas ruang diskusi belum diimbangi dengan sistem manajemen yang memadai[cite: 8]. [cite_start]Proses peminjaman yang sebelumnya manual mengharuskan mahasiswa datang langsung untuk mengecek dan mencatat pemesanan[cite: 9]. [cite_start]Hal ini memicu inefisiensi waktu serta ketidakpastian ketersediaan ruangan[cite: 10]. [cite_start]LibMate dikembangkan sebagai solusi komprehensif untuk mendigitalkan proses pemesanan ruang diskusi tersebut[cite: 243].

## ✨ Fitur Aplikasi
[cite_start]LibMate memadukan *interface* modern dengan berbagai fitur untuk mahasiswa dan admin[cite: 244]:

* [cite_start]**Eksplorasi & Katalog:** Pencarian dinamis berbasis AJAX untuk mengeksplorasi ketersediaan dan detail ruangan[cite: 41, 46, 244].
* [cite_start]**Informasi Cuaca Terkini:** Fitur cek cuaca untuk membantu perencanaan mahasiswa sebelum melakukan peminjaman[cite: 21].
* [cite_start]**Chatbot Asisten:** Fitur interaktif untuk membantu proses pemesanan ruang[cite: 27].
* [cite_start]**Formulir Pengajuan:** Antarmuka pemesanan ruangan beserta riwayat reservasi pada halaman profil[cite: 56, 73].
* [cite_start]**Manajemen Admin Lengkap:** Dashboard admin untuk mengelola data ruang, pemesanan, pesan masuk (kontak), serta manajemen data mahasiswa yang dilengkapi fitur penangguhan (*suspended*)[cite: 53, 75, 80, 111, 124, 244].
* [cite_start]**Kustomisasi Tampilan:** Pengaturan preferensi tema, termasuk fitur *dark mode*[cite: 66].

## 🗄️ Struktur Database
[cite_start]Sistem ini menggunakan arsitektur *database* relasional[cite: 244]. Beberapa tabel utama yang digunakan meliputi:
* [cite_start]`users`: Menyimpan data autentikasi utama akun dan *role* (admin/mahasiswa)[cite: 232].
* [cite_start]`ruangans`: Menyimpan informasi detail katalog ruangan seperti lokasi lantai dan kapasitas[cite: 233].
* [cite_start]`peminjamans`: Menyimpan data transaksi reservasi ruangan, jadwal pinjam, dan status persetujuan[cite: 236].
* [cite_start]`fasilitas` & `fasilitas_ruangan`: Menyimpan data pelengkap/inventaris ruangan[cite: 234, 235].

---

## ⚙️ Cara Instalasi dan Menjalankan Aplikasi

Aplikasi ini dibangun menggunakan arsitektur *framework* PHP (Laravel). Ikuti langkah-langkah berikut untuk menjalankan aplikasi di lingkungan lokal (Localhost):

### Persyaratan Sistem
Pastikan sistem komputer Anda telah terinstal:
* PHP (minimal versi 8.x)
* Composer
* Database Server (MySQL / MariaDB via XAMPP/Laragon)
* Node.js & NPM (untuk melakukan kompilasi aset *frontend*)

### Langkah Instalasi
1. **Kloning Repositori:**
   Buka terminal/CMD dan jalankan perintah kloning ke dalam direktori komputer Anda.
   ```bash
   git clone <link-repositori-github-anda>
   cd libmate
