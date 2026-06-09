# Cara Menjalankan Project SigerNav

## Prasyarat
- PHP 8.3+ (disarankan PHP 8.4)
- Composer 2.x
- Node.js 18+
- SQLite (sudah tersedia, tidak perlu install database server)

---

## Langkah 1 — Install Dependencies PHP

```bash
composer install
```

**Untuk apa?** `composer install` mengunduh semua library/package yang dibutuhkan project dari packagist.org. Bayangkan seperti "membeli semua bahan masakan" sebelum bisa memasak. Tanpa ini, project tidak bisa berjalan karena banyak kode yang bergantung pada library eksternal.

---

## Langkah 2 — Install Dependencies Node.js

```bash
npm install
```

**Untuk apa?** Sama seperti `composer install`, tapi untuk JavaScript. Mengunduh library frontend seperti Tailwind CSS, Vite, dan lainnya. Hasilnya tersimpan di folder `node_modules/`.

---

## Langkah 3 — Buat File .env

File `.env` sudah ada di project ini. Jika belum ada, jalankan:

```bash
cp .env.example .env
```

**Untuk apa?** File `.env` menyimpan konfigurasi aplikasi seperti database credentials, API keys, dan settingan environment. Setiap environment (development, production) bisa punya konfigurasi berbeda.

---

## Langkah 4 — Generate Application Key

```bash
php artisan key:generate
```

**Untuk apa?** Membuat unique key (APP_KEY) yang digunakan Laravel untuk encrypt session, cookies, dan data sensitif lainnya. Tanpa ini, aplikasi tidak bisa berjalan dengan aman.

---

## Langkah 5 — Setup Database

```bash
php artisan migrate
```

**Untuk apa?** Membuat tabel-tabel di database berdasarkan file migrasi. Iniequivalent dengan "membuat struktur lemari dan rak" sebelum bisa menyimpan barang.

---

## Langkah 6 — Menjalankan Aplikasi

### Cara singkat (semuanya sekaligus)
```bash
composer run dev
```
Menjalankan: Web Server + Queue Worker + Log Viewer + Vite Dev Server

### Cara manual
```bash
# Terminal 1: Web server
php artisan serve

# Terminal 2: Frontend dev server
npm run dev
```

Buka browser: **http://localhost:8000**

---

## Catatan Penting

- `node_modules/` dan `vendor/` tidak perlu di-commit ke git karena bisa di-download ulang dengan `composer install` dan `npm install`
- Jika ada error setelah update kode, coba bersihkan cache:
  ```bash
  php artisan config:clear
  php artisan cache:clear
  ```