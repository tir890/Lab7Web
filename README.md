# Lab7Web: Praktikum 1 | Framework PHP (CodeIgniter 4)

Cakupan Praktikum:
Modul 1: Inisialisasi CI4, Controller, Routing, dan Layouting Parsial.

Modul 2: Database MySQL, Model, dan Implementasi CRUD Artikel.

Modul 3: Optimasi tampilan dengan View Layout (Inheritance) dan View Cell.

Modul 4: Sistem Autentikasi (Login & Logout) menggunakan Filters untuk memproteksi halaman admin.

-----

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

> ![Gambar 1](https://github.com/tir890/Lab7Web/blob/3b3b730a9d84d34fc95fe690d0a9f259f9050fd5/image/1.jpeg)

### 2\. Implementasi Controller

Pembuatan file `Page.php` untuk mengatur logika tampilan tiap halaman.

> ![Gambar 2](<img width="1919" height="999" alt="image" src="https://github.com/user-attachments/assets/e8cc129d-e07a-4c56-8510-2cae23735d9c" />
)

### 3\. Tampilan Halaman dengan Layout

Hasil akhir halaman (misalnya Halaman About) yang sudah menggunakan template header, footer, dan sidebar secara dinamis.

> 

### 4\. Navigasi Halaman

Menunjukkan bahwa semua link pada navigasi (Home, Artikel, About, Kontak) sudah berfungsi dengan layout yang konsisten.

> 

-----

## 🏁 Penutup

Praktikum ini memberikan pemahaman dasar mengenai pentingnya framework dalam pengembangan aplikasi web. Dengan struktur MVC dan layouting yang baik, aplikasi menjadi lebih terorganisir dan mudah dipelihara.

Tentu, ini adalah pembaruan template **README.md** yang menggabungkan materi dari modul pertama (Dasar CI4 & Layouting) dan modul kedua (CRUD & Database). Template ini disusun agar terlihat profesional di GitHub, mirip dengan struktur yang Anda inginkan sebelumnya.

-----

# Praktikum 2 | Framework PHP (CodeIgniter 4) - Layouting & CRUD Artikel

## 📝 Deskripsi Project

Project ini merupakan rangkaian tugas praktikum mata kuliah Pemrograman Web 2 yang menggunakan **Framework CodeIgniter 4**. Repository ini mencakup implementasi konsep MVC, sistem template modular, hingga pengelolaan data dinamis dari database (CRUD).

## ✨ Fitur & Materi Utama

### 1\. Framework Dasar & Layouting

  * **Konfigurasi Environment:** Pengaturan `.env` dan aktivasi ekstensi PHP (intl, mbstring, dsb).
  * **Modular Template:** Menggunakan fungsi `$this->include()` untuk memisahkan komponen `header`, `footer`, dan `sidebar`.
  * **Routing:** Pemetaan URL yang rapi untuk halaman statis (Home, About, Contact).

### 2\. Database & CRUD (Lanjutan)

  * **Database Migration:** Pembuatan database `lab_ci4` dan tabel `artikel`.
  * **Konfigurasi Database:** Menghubungkan framework dengan MySQL melalui file `.env`.
  * **Model:** Penggunaan `ArtikelModel` untuk menangani query data ke database.
  * **Fitur CRUD:** \* **Read:** Menampilkan daftar artikel di halaman admin.
      * **Create:** Menambah artikel baru dengan input form.
      * **Update:** Mengubah isi artikel yang sudah ada.
      * **Delete:** Menghapus data artikel dari database.

-----

## 📂 Struktur Folder Proyek

```text
lab7_php_ci/
├── app/
│   ├── Config/
│   │   ├── Database.php    <-- Konfigurasi DB
│   │   └── Routes.php      <-- Routing URL
│   ├── Controllers/
│   │   ├── Page.php        <-- Controller Halaman Statis
│   │   └── Artikel.php     <-- Controller CRUD Artikel
│   ├── Models/
│   │   └── ArtikelModel.php <-- Model Database Artikel
│   └── Views/
│       ├── artikel/        <-- View untuk CRUD (index, tambah, edit)
│       ├── template/       <-- Template Layout (header, footer, sidebar)
│       └── ...             <-- View halaman statis lainnya
├── public/
│   └── .htaccess           <-- Rewrite URL
└── .env                    <-- Konfigurasi Environment & DB
```

-----

## 🛠️ Instalasi & Penggunaan

1.  **Persiapan Database:**

      * Buat database baru bernama `lab_ci4`.
      * Jalankan perintah SQL berikut:
        ```sql
        CREATE TABLE artikel (
            id INT(11) auto_increment,
            judul VARCHAR(200) NOT NULL,
            isi TEXT,
            gambar VARCHAR(200),
            status TINYINT (1) DEFAULT 0,
            slug VARCHAR(200),
            PRIMARY KEY(id)
        );
        ```

2.  **Konfigurasi `.env`:**

      * Ubah file `env` menjadi `.env`.
      * Sesuaikan pengaturan database:
        ```env
        database.default.hostname = localhost
        database.default.database = lab_ci4
        database.default.username = root
        database.default.password = 
        database.default.DBDriver = MySQLi
        ```

3.  **Jalankan Project:**

    ```bash
    php spark serve
    ```

    Akses di `http://localhost:8080`.

-----

## 📸 Dokumentasi (Screenshots)

### A. Bagian Layouting (Praktikum 1)

**1. Tampilan Halaman Depan**

> 

### B. Bagian CRUD Artikel (Praktikum 2)

**2. Daftar Artikel (Admin)**
Menampilkan data artikel yang diambil dari database melalui Model.

> 

**3. Tambah Data Artikel**
Form untuk memasukkan judul dan isi artikel baru.

> 

**4. Ubah & Hapus Data**
Fitur untuk memperbarui informasi artikel atau menghapusnya.

> 

-----

## 🏁 Penutup

Melalui praktikum ini, saya telah mempelajari bagaimana CodeIgniter 4 mempermudah pengembangan web dengan memisahkan logika bisnis (Controller), pengolahan data (Model), dan tampilan (View).

Tentu, ini adalah versi terlengkap dari template **README.md** yang menggabungkan seluruh materi dari **Modul 1, 2, dan 3**. Template ini dirancang untuk memenuhi persyaratan laporan praktikum yang terstruktur, mulai dari dasar framework hingga teknik advanced seperti *View Layout* dan *View Cell*.

-----

# Praktikum 3 | Pengembangan Framework CodeIgniter 4 (Layouting, CRUD, & View Components)

## 📝 Deskripsi Project

Project ini merupakan kumpulan hasil praktikum mata kuliah Pemrograman Web 2 yang menggunakan **Framework CodeIgniter 4**. Fokus utama dari project ini adalah membangun aplikasi web yang modular, efisien, dan memiliki manajemen data yang baik melalui database MySQL.

-----

## ✨ Fitur Utama

### 1\. Sistem Template Modern

  * **View Layout:** Mengganti metode *include* manual dengan konsep *layout inheritance* (`$this->extend`, `$this->renderSection`).
  * **View Cell:** Membuat komponen UI mandiri (seperti daftar artikel terbaru) yang bisa dipanggil di halaman mana pun secara modular.

### 2\. Manajemen Data (CRUD)

  * Integrasi penuh dengan database MySQL menggunakan **Model**.
  * Fitur tambah, ubah, dan hapus artikel secara dinamis.
  * Penerapan *Slug* untuk URL artikel yang lebih SEO-friendly.

-----

## 📂 Struktur Folder Proyek (Terupdate)

```text
lab7_php_ci/
├── app/
│   ├── Controllers/
│   │   ├── Page.php            <-- Navigasi halaman statis
│   │   └── Artikel.php         <-- Logika CRUD & View Cell
│   ├── Models/
│   │   └── ArtikelModel.php    <-- Query Database
│   ├── View/
│   │   ├── layout/             <-- Template Utama (Main Layout)
│   │   │   └── main.php
│   │   ├── components/         <-- Komponen Modular (View Cell)
│   │   │   └── artikel_terkini.php
│   │   └── artikel/            <-- View konten (Index, Form, Detail)
├── public/
│   └── style.css               <-- Styling Dashboard & Web
└── .env                        <-- Konfigurasi DB & App
```

-----

## 🛠️ Instalasi & Persiapan

1.  **Database:**
    Gunakan database `lab_ci4` dan pastikan tabel `artikel` sudah memiliki field yang diperlukan (termasuk penambahan field tanggal jika diperlukan untuk fitur *artikel terkini*).

2.  **Konfigurasi View Layout:**
    Pastikan file `app/Views/layout/main.php` sudah dikonfigurasi sebagai *parent layout* agar tampilan konsisten di seluruh halaman.

3.  **Running:**

    ```bash
    php spark serve
    ```

-----

## 📸 Dokumentasi Praktikum

### A. Implementasi View Layout (Modul 3)

Penggunaan `renderSection('content')` untuk memisahkan struktur utama dengan isi konten halaman.

> 

### B. Fitur View Cell

Menampilkan widget "Artikel Terkini" pada sidebar yang dipanggil menggunakan fungsi `view_cell`.

> 

### C. Manajemen Data Artikel (CRUD)

Daftar artikel yang berhasil dikelola melalui database.

> 

-----

## 🏁 Kesimpulan Praktikum

Dengan selesainya Modul 3, aplikasi web kini memiliki struktur yang jauh lebih profesional. Penggunaan **View Layout** memudahkan perubahan desain global hanya dari satu file, sementara **View Cell** memungkinkan pembuatan komponen yang dapat digunakan kembali (*reusable components*\), meningkatkan efisiensi pengembangan.

Luar biasa, ini adalah versi **paling lengkap** untuk template **README.md** Anda. Template ini mencakup seluruh materi dari **Modul 1 hingga Modul 4**, termasuk sistem keamanan dan autentikasi yang baru saja Anda tambahkan.

-----

# Praktikum 4 | Pengembangan Framework CodeIgniter 4 - Full Stack (Layout, CRUD, & Auth)

Project ini adalah aplikasi web manajemen artikel berbasis **CodeIgniter 4** yang dikembangkan secara bertahap melalui empat modul praktikum. Proyek ini mengintegrasikan desain antarmuka modular, pengolahan database dinamis, hingga sistem keamanan pengguna.

-----

## ✨ Fitur Utama

  * **Sistem Autentikasi (Auth):** Melindungi direktori `/admin` agar hanya dapat diakses oleh user yang sudah login.
  * **Filters & Middleware:** Implementasi filter `Auth` untuk pengecekan session secara otomatis.
  * **CRUD Data Artikel:** Manajemen data berita/artikel secara lengkap (Tambah, Lihat, Ubah, Hapus).
  * **Modern Layouting:** Menggunakan konsep `extend` dan `section` untuk konsistensi UI.
  * **View Cell:** Komponen "Artikel Terkini" yang bersifat reusable.

-----

## 📂 Struktur Folder Final

```text
lab7_php_ci/
├── app/
│   ├── Config/
│   │   ├── Filters.php        <-- Registrasi Filter Auth
│   │   └── Routes.php         <-- Grup Routing Admin
│   ├── Controllers/
│   │   ├── Artikel.php        <-- Controller CRUD
│   │   └── User.php           <-- Controller Login/Logout
│   ├── Filters/
│   │   └── Auth.php           <-- Logika Proteksi Halaman
│   ├── Models/
│   │   ├── ArtikelModel.php
│   │   └── UserModel.php      <-- Model User Login
│   └── Views/
│       ├── user/              <-- View Login
│       ├── layout/            <-- Main Template
│       └── artikel/           <-- View CRUD
├── public/
│   └── style.css
└── .env                       <-- Konfigurasi DB & Environment
```

-----

## 🛠️ Langkah Instalasi (Modul 4)

1.  **Database User:**
    Pastikan tabel `user` sudah dibuat di database `lab_ci4`:
    ```sql
    CREATE TABLE user (
        id INT(11) auto_increment,
        username VARCHAR(200) NOT NULL,
        useremail VARCHAR(200),
        userpassword VARCHAR(200),
        PRIMARY KEY(id)
    );
    ```
2.  **Konfigurasi Filter:**
    Daftarkan alias `auth` pada `app/Config/Filters.php` agar sistem tahu cara menangani proteksi login.
3.  **Grup Routing:**
    Gunakan `routes->group('admin', ...)` untuk mengunci semua fitur admin dalam satu filter keamanan.

-----

## 📸 Dokumentasi Praktikum (Update Modul 4)

### 1\. Halaman Login

Implementasi form login untuk autentikasi admin.

> 

### 2\. Proteksi Halaman Admin

Percobaan mengakses `/admin/artikel` tanpa login akan otomatis dialihkan (redirect) ke halaman login.

> 

### 3\. Dashboard Artikel (Setelah Login)

Tampilan manajemen artikel setelah berhasil masuk ke sistem.

> 

### 4\. Fitur Logout

Penghapusan session user dan kembali ke halaman login.

> 

-----

## 🏁 Kesimpulan

Dengan integrasi **Modul 4**, aplikasi ini tidak hanya berfungsi secara fitur (CRUD) tetapi juga sudah memiliki standar keamanan dasar melalui sistem login dan filter. Hal ini memastikan bahwa data sensitif di bagian admin tidak dapat dimanipulasi oleh pihak yang tidak berwenang.
