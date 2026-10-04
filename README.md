# Web SMK INFOKOM Kota Bogor

Website resmi SMK INFOKOM Kota Bogor, dibangun dengan **Laravel** (PHP) dengan tampilan memakai HTML/Blade, Bootstrap 5, dan CSS/JS kustom. Tampilan sudah **responsive** untuk desktop, tablet, dan HP.

## Fitur / Halaman

| Halaman | URL |
|---|---|
| Beranda | `/home` |
| Profil Sekolah & Visi Misi | `/profil` |
| Program Keahlian | `/program` |
| Fasilitas | `/fasilitas` |
| Galeri | `/galeri` |
| Berita | `/berita` |
| PPDB | `/ppdb` |
| BKK (Bursa Kerja Khusus) | `/bkk` |
| Mitra Kerja Sama | `/mitra` |
| Lokasi & Kontak | `/kontak` |
| Chatbot AI (Gemini) | widget kanan bawah di semua halaman |

> Catatan: alamat dasar `/` belum memiliki route. Buka langsung `http://localhost:8000/home`.

## Kebutuhan Sistem

- **PHP 8.3** atau lebih baru (ekstensi umum Laravel: `mbstring`, `openssl`, `pdo_sqlite`, `curl`, `fileinfo`, `xml`, `ctype`, `tokenizer`)
- **Composer** 2.x
- **Node.js & npm** (opsional, hanya untuk Vite/Tailwind bawaan Laravel; halaman website memakai file di `public/CSS` dan `public/JS`, jadi tidak wajib untuk menjalankan tampilan)
- Koneksi internet (Bootstrap, Bootstrap Icons, dan Google Fonts dimuat lewat CDN)

Alternatif paling mudah di Windows: pakai [Laragon](https://laragon.org) atau XAMPP (PHP 8.3+) lalu install Composer.

## Cara Menjalankan

### 1. Ambil proyek

```bash
git clone <url-repository-ini>
cd Web-SmkInfokomBogor-IRI
```

Jika mengunduh ZIP, ekstrak lalu masuk ke folder hasil ekstrak lewat terminal.

### 2. Install dependency PHP

```bash
composer install
```

### 3. Siapkan file `.env`

```bash
# Linux / macOS / Git Bash
cp .env.example .env

# Windows (CMD)
copy .env.example .env
```

Lalu buat kunci aplikasi:

```bash
php artisan key:generate
```

### 4. Siapkan database

Secara bawaan proyek memakai **SQLite** (`DB_CONNECTION=sqlite`), jadi tidak perlu install MySQL.

```bash
# Linux / macOS / Git Bash
touch database/database.sqlite

# Windows (CMD)
type nul > database\database.sqlite

php artisan migrate
```

Database dipakai untuk session, cache, dan antrean (queue) bawaan Laravel.

### 5. (Opsional) Aktifkan Chatbot AI

Chatbot memakai Google Gemini. Tanpa API key, website tetap berjalan normal, tetapi chatbot tidak akan bisa menjawab.

1. Buat API key di [Google AI Studio](https://aistudio.google.com/apikey).
2. Isi di file `.env`:

```env
GEMINI_API_KEY=isi_api_key_anda
```

Pengaturan lain (opsional): `GEMINI_MODEL`, `GEMINI_FALLBACK_MODELS`, `GEMINI_THINKING_LEVEL`, `GEMINI_TIMEOUT`. Nilai bawaannya ada di `config/services.php`.

> Jangan pernah menaruh API key di file JavaScript atau commit file `.env` ke repository.

Basis pengetahuan chatbot ada di `resources/chatbot/knowledge.md`.

### 6. Jalankan server

```bash
php artisan serve
```

Buka di browser: **http://localhost:8000/home**

### 7. (Opsional) Install dan build aset Vite

```bash
npm install
npm run build
```

Untuk mode pengembangan dengan hot reload, jalankan `npm run dev` di terminal kedua.

## Cara Cepat (satu perintah)

Proyek menyediakan script Composer yang menjalankan langkah install, `.env`, `key:generate`, `migrate`, dan build aset sekaligus:

```bash
composer setup
```

Setelah itu cukup jalankan `php artisan serve`.

## Mencoba Tampilan Mobile

1. Buka halaman di Chrome / Edge, tekan **F12**.
2. Klik ikon **Toggle device toolbar** (atau tekan `Ctrl + Shift + M`).
3. Pilih perangkat (mis. iPhone SE 375px) atau atur lebar manual, lalu muat ulang halaman.

Agar bisa dibuka dari HP di jaringan Wi-Fi yang sama:

```bash
php artisan serve --host=0.0.0.0 --port=8000
```

Lalu buka `http://<IP-komputer-anda>:8000/home` di HP.

## Struktur Folder Penting

```
app/Http/Controllers/ChatbotController.php   Logika chatbot Gemini
resources/views/layouts/app.blade.php        Layout utama (head, navbar, footer, chatbot)
resources/views/components/                  Navbar, footer, chatbot
resources/views/frontend/                    Halaman (home, profil, program, dst.)
resources/chatbot/knowledge.md               Basis pengetahuan chatbot
public/CSS/                                  CSS tiap halaman (style.css = CSS utama)
public/JS/                                   JavaScript tiap halaman
public/IMG/                                  Gambar dan ikon
routes/web.php                               Daftar route
config/services.php                          Konfigurasi Gemini
```

## Pemecahan Masalah

| Masalah | Solusi |
|---|---|
| `could not find driver` | Aktifkan ekstensi `pdo_sqlite` di `php.ini`. |
| `No application encryption key has been specified` | Jalankan `php artisan key:generate`. |
| `Database file ... does not exist` | Buat file `database/database.sqlite` lalu `php artisan migrate`. |
| Halaman `/` menampilkan 404 | Buka `/home`. |
| Tampilan tidak berubah setelah edit CSS | Hard refresh (`Ctrl + F5`) atau jalankan `php artisan view:clear`. |
| Chatbot tidak menjawab | Pastikan `GEMINI_API_KEY` sudah diisi, lalu `php artisan config:clear`. |
| Tampilan tanpa gaya / ikon hilang | Periksa koneksi internet (Bootstrap & font dimuat dari CDN). |

## Lisensi

Dibangun di atas framework [Laravel](https://laravel.com), berlisensi [MIT](https://opensource.org/licenses/MIT).