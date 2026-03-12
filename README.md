# Cibaduyut Shoes – Sistem Manajemen Sepatu

## Deskripsi Project

Cibaduyut Shoes merupakan aplikasi web sederhana yang menampilkan katalog sepatu dengan informasi produk seperti gambar, nama sepatu, harga, dan stok.

Website ini dibuat sebagai tugas praktikum mata kuliah **Sistem Informasi Berbasis Web (ISB-310)** untuk mempelajari dasar pengembangan aplikasi web menggunakan HTML, CSS, Bootstrap, dan JavaScript.

---

## Fitur Sistem

### 1. Menampilkan Produk

Website menampilkan daftar sepatu dalam bentuk kartu (card) yang berisi:

* Gambar produk
* Nama sepatu
* Harga
* Stok sepatu

---

### 2. Fitur Pembelian

Pengguna dapat membeli sepatu dengan menekan tombol **Beli**.

Fungsi yang terjadi:

* Stok sepatu akan berkurang secara otomatis
* Jika stok tersedia maka pembelian berhasil
* Jika stok habis maka sistem akan menampilkan pesan **Stok Habis**

---

### 3. Fitur Wishlist

Pengguna dapat menambahkan produk ke **Wishlist**.

Fitur ini menggunakan **Local Storage** pada browser sehingga:

* Produk yang ditambahkan ke wishlist akan tersimpan di browser
* Jumlah wishlist akan muncul pada navbar
* Wishlist dapat dilihat melalui modal popup
* Produk dapat dihapus dari wishlist

---

### 4. Dark Mode

Website memiliki fitur **Mode Gelap (Dark Mode)**.

Fungsi dari fitur ini:

* Mengubah tampilan website menjadi gelap
* Mode yang dipilih akan tersimpan di **Local Storage**
* Saat halaman dibuka kembali, mode sebelumnya tetap aktif

---

Penjelasan:

* **index.html** → Halaman utama website
* **script.js** → Berisi fungsi JavaScript (pembelian, wishlist, dark mode)
* **style.css** → Styling tambahan untuk tampilan website
* **images** → Folder gambar produk sepatu

---
---

## Author

Rizky Sunday
Praktikum Sistem Informasi Berbasis Web
Week 3
