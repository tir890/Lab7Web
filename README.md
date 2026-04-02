# Lab7Web: Framework PHP (CodeIgniter 4) - Dasar MVC dan Layouting

**Nama:** Tiara Hayatul Khoir

**NIM:** 312410474

**Kelas:** I241E

**Mata Kuliah:** Pemrograman Web 2

## 📝 Deskripsi Project

Repository ini berisi implementasi **Praktikum 1** Mata Kuliah Pemrograman Web 2. Project ini berfokus pada pengenalan dasar **Framework CodeIgniter 4** dengan menerapkan konsep **MVC (Model-View-Controller)** dan sistem **Layouting** yang modular.

Tujuan utama dari praktikum ini adalah:

1.  Memahami konsep dasar Framework.
2.  Mengimplementasikan struktur MVC.
3.  Membuat aplikasi web sederhana menggunakan CodeIgniter 4.

-----

## ✨ Fitur & Materi Pembelajaran

### 1\. Konfigurasi Environment

  * Pengaturan ekstensi PHP pada `php.ini` (intl, mbstring, json, mysqlnd, xml) agar kompatibel dengan CI4.
  * Menjalankan local development server menggunakan perintah `php spark serve`.

### 2\. Controller & Routing

  * Pembuatan **Controller Page** untuk menangani navigasi berbagai halaman.
  * Konfigurasi **Routing** agar URL lebih rapi dan sesuai dengan struktur navigasi (Home, Artikel, About, Kontak).

### 3\. Layouting Modular (View)

  * Pemisahan komponen UI menjadi bagian yang modular: `header.php`, `footer.php`, dan `sidebar.php`.
  * Penggunaan fungsi `include()` untuk memanggil template sehingga kode lebih efisien dan mudah dikelola.

-----

## 📂 Struktur Folder Proyek

Berdasarkan langkah praktikum, berikut adalah struktur direktori utama:

```text
lab11_php_ci/ (atau Lab7Web)
├── app/
│   ├── Config/
│   │   └── Routes.php      <-- Konfigurasi rute URL
│   ├── Controllers/
│   │   └── Page.php        <-- Controller utama navigasi
│   └── Views/
│       ├── home.php        <-- Konten halaman Home
│       ├── about.php       <-- Konten halaman About
│       ├── artikel.php     <-- Konten halaman Artikel
│       ├── kontak.php      <-- Konten halaman Kontak
│       └── template/       <-- Folder Layout Modular
│           ├── header.php
│           ├── footer.php
│           └── sidebar.php
├── public/
│   └── .htaccess           <-- Konfigurasi server & rewrite URL
├── writable/               <-- Folder cache dan log
└── spark                   <-- CLI CodeIgniter 4
```

-----

## 🛠️ Instalasi & Persiapan

1.  **Prasyarat:**

      * Pastikan PHP sudah terinstal dan ekstensi `php-json`, `php-mysqlnd`, `php-xml`, `php-intl` sudah diaktifkan di file `php.ini`.

2.  **Setup Project:**

      * Copy framework CI4 ke direktori webserver (misal: `htdocs/lab11_php_ci`).
      * Buka terminal di folder proyek tersebut.

3.  **Menjalankan Server:**

    ```bash
    php spark serve
    ```

    Akses project melalui browser di: `http://localhost:8080`

-----

## 📸 Dokumentasi Praktikum (Screenshots)

### 1\. Persiapan Awal

Konfigurasi ekstensi PHP pada XAMPP Control Panel untuk mendukung CodeIgniter 4.

> 

### 2\. Implementasi Controller

Pembuatan file `Page.php` untuk mengatur logika tampilan tiap halaman.

> 

### 3\. Tampilan Halaman dengan Layout

Hasil akhir halaman (misalnya Halaman About) yang sudah menggunakan template header, footer, dan sidebar secara dinamis.

> 

### 4\. Navigasi Halaman

Menunjukkan bahwa semua link pada navigasi (Home, Artikel, About, Kontak) sudah berfungsi dengan layout yang konsisten.

> 

-----

## 🏁 Penutup

Praktikum ini memberikan pemahaman dasar mengenai pentingnya framework dalam pengembangan aplikasi web. Dengan struktur MVC dan layouting yang baik, aplikasi menjadi lebih terorganisir dan mudah dipelihara.

