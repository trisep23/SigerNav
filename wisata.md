# Cara Menambah Destinasi Wisata

## Cara Menambah Data

Ada 2 cara untuk menambah wisata baru:

---

### Cara 1: Langsung ke Database (phpMyAdmin / SQLite Browser)

Buka file database dengan tools seperti:
- **phpMyAdmin** (untuk MySQL/MariaDB)
- **DB Browser for SQLite** (untuk SQLite, sudah termasuk di project ini)
- Atau via terminal: `php artisan db:seed`

#### Langkah di DB Browser (SQLite):

1. Buka file `database/database.sqlite` dengan **DB Browser for SQLite**
2. Klik tabel `wisatas`
3. Klik tab **"Tambah Data"** (Insert)
4. Isi kolom-kolom berikut:

| Kolom | Wajib? | Keterangan |
|-------|--------|-------------|
| `nama` | **Ya** | Nama destinasi |
| `alamat` | Tidak | Alamat lengkap |
| `kategori` | **Ya** | Salah satu dari: `alam`, `gunung`, `air_terjun`, `budaya`, `taman_nasional`, `pantai`, `lainnya` |
| `latitude` | **Ya** | Koordinat lintang dari Google Maps (contoh: `-5.2472777`) |
| `longitude` | **Ya** | Koordinat bujur dari Google Maps (contoh: `104.0672518`) |
| `gambar` | Tidak | URL gambar (contoh: dari Unsplash) |
| `thumbnail` | Tidak | URL gambar kecil untuk popup di peta |
| `deskripsi` | Tidak | Deskripsi singkat |
| `kabupaten` | Tidak | Nama kabupaten (misal: `Bandar Lampung`, `Lampung Barat`) |
| `wikipedia` | Tidak | URL Wikipedia jika ada |
| `elevasi` | Tidak | Ketinggian dalam meter (untuk gunung) |
| `status` | Tidak | `true` = aktif, `false` = nonaktif |

---

### Cara 2: Edit File Seeder (untuk banyak data sekaligus)

1. Buka `database/seeders/WisataSeeder.php`
2. Tambahkan data baru di array `$wisatas`:

```php
[
    'nama' => 'Nama Wisata Baru',
    'alamat' => 'Alamat lengkap',
    'kategori' => 'alam', // sesuaikan
    'latitude' => -5.1234567,
    'longitude' => 104.1234567,
    'gambar' => 'https://images.unsplash.com/photo-xxxx?w=800&q=80',
    'thumbnail' => 'https://images.unsplash.com/photo-xxxx?w=400&q=75',
    'deskripsi' => 'Deskripsi singkat',
    'kabupaten' => 'Lampung Barat',
    'wikipedia' => null,
    'elevasi' => '',
    'status' => true,
],
```

3. Jalankan:
```bash
php artisan db:seed --class=WisataSeeder
```

**Catatan:** Cara ini akan menambahkan data baru tanpa menghapus yang lama (sudah ada check `if (!$exists)`).

---

## Kategori yang Tersedia

Pilih salah satu sesuai jenis wisata:

| Kategori | Untuk Jenis Wisata |
|----------|-------------------|
| `alam` | Taman, padang rumput, sawah, danau |
| `gunung` | Gunung, bukit, peak |
| `air_terjun` | Air terjun, sumber air |
| `budaya` | Museum, cagar budaya, heritage |
| `taman_nasional` | Taman nasional |
| `pantai` | Pantai, pesisir |
| `lainnya` | Yang tidak termasuk di atas |

---

## Cara Mendapatkan Koordinat dari Google Maps

### Metode 1: Dari Browser (Desktop)

1. Buka [Google Maps](https://maps.google.com)
2. Cari lokasi wisata
3. Klik di titik yang diinginkan di peta
4. Di bagian bawah layar, klik **koordinat** (misal: `-5.2472777, 104.0672518`)
5. Koordinat akan di-copy ke clipboard

### Metode 2: Dari URL

1. Cari lokasi di Google Maps
2. Klik titik di peta
3. Lihat URL browser — koordinat ada di akhir:
   ```
   https://www.google.com/maps/place/-5.2472777,104.0672518
   ```
   - Angka sebelum koma = **latitude** (Lintang)
   - Angka setelah koma = **longitude** (Bujur)

### Metode 3: Dari Google Maps Mobile

1. Tekan dan tahan di titik yang diinginkan
2. Koordinat muncul di search bar atas
3. Ketuk untuk copy

### Metode 4: Dari QGIS / GeoJSON

Jika kamu punya file `.geojson` atau membuka di QGIS:
- Buka file di **QGIS**
- Klik fitur → panel info menunjukkan koordinat
- Atau klik kanan layer → "Save As" → pilih format GeoJSON

---

## Warna Marker di Peta berdasarkan Kategori

| Kategori | Warna | Keterangan |
|----------|-------|-------------|
| `alam` | Hijau | Taman, area hijau |
| `gunung` | Merah | Gunung, bukit |
| `air_terjun` | Biru | Air terjun |
| `budaya` | Orange | Museum, heritage |
| `taman_nasional` | Emerald | Taman nasional |
| `pantai` | Cyan | Pantai |
| `lainnya` | Abu-abu | Yang tidak termasuk |

---

## Struktur Data Lengkap (untuk referensi)

```json
{
    "nama": "Nama Destinasi",
    "alamat": "Alamat lengkap jika ada",
    "kategori": "alam",
    "latitude": -5.2472777,
    "longitude": 104.0672518,
    "gambar": "https://images.unsplash.com/photo-xxxx?w=800&q=80",
    "thumbnail": "https://images.unsplash.com/photo-xxxx?w=400&q=75",
    "deskripsi": "Deskripsi singkat",
    "kabupaten": "Lampung Barat",
    "wikipedia": "https://en.wikipedia.org/wiki/Nama_Wiki",
    "elevasi": "1200",
    "status": true
}
```

---

## Tips

- **Latitude** range di Indonesia: `-8.0` hingga `6.0` (negatif = selatan equator)
- **Longitude** range di Indonesia: `95` hingga `141` (positif = timur Greenwich)
- Province Lampung: **Latitude** sekitar `-4.2` hingga `-6.2`, **Longitude** sekitar `103.8` hingga `105.9`
- Koordinat bisa dicek di [Google Maps](https://maps.google.com) dengan klik kanan di lokasi
- Jika marker tidak muncul, cek apakah `latitude` dan `longitude` sudah benar dan dalam format desimal (bukan DMS seperti `5°15'30"S`)