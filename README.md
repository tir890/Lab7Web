## 🧩 Praktikum 7: PHP Dasar

**Mata Kuliah:** Pemrograman Web

**Nama:** Tiara Hayatul Khoir

**NIM:** 312410474

**Kelas:** TI.24.A5

---

### 🎯 Tujuan Praktikum

1. Memahami konsep dasar *server-side scripting* menggunakan PHP.
2. Mempelajari variabel, tipe data, struktur kondisi, dan perulangan pada PHP.
3. Mampu membuat program PHP sederhana dan mengaksesnya melalui web server (XAMPP).

---

### ⚙️ Persiapan Lingkungan

1. Install **XAMPP** (versi portable disarankan).
2. Ekstrak ke direktori, misalnya:

   ```
   D:\xampp
   ```
3. Jalankan **Apache** dan **MySQL** melalui XAMPP Control Panel.
4. Buat folder baru di:

   ```
   D:\xampp\htdocs\lab7_php_dasar
   ```
5. Simpan semua file latihan di dalam folder tersebut.

---

### 🧠 Langkah-Langkah Praktikum

#### 1️⃣ PHP Dasar

File: `php_dasar.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
  <h1>Belajar PHP Dasar</h1>

  <?php
  // --- Bagian 1: Hello World ---
  echo "Hello World<br><br>";

  // --- Bagian 2: Variable ---
  $nim = "0411500400";
  $nama = "Abdullah";
  echo "NIM : " . $nim . "<br>";
  echo "Nama : $nama<br><br>";

  // --- Bagian 3: Predefined Variable ($_GET) ---
  if (isset($_GET['nama'])) {
    echo "Selamat Datang, " . $_GET['nama'];
  } else {
    echo "Masukin nama di URL kayak gini: ?nama=Tir";
  }
  ?>
</body>
</html>
```

📍 **Cara akses:**

* Tanpa parameter:
  👉 `http://localhost/lab7_php_dasar/php_dasar.php`
* Dengan parameter GET:
  👉 `http://localhost/lab7_php_dasar/php_dasar.php?nama=Tir`

📸 **Hasil:**

![Gambar](https://github.com/tir890/Lab7Web/blob/138ee3fddd6a5c267ed28682b0e8305e7aa3a6b5/image.png)

Menampilkan teks *Hello World*, NIM, Nama, dan ucapan “Selamat Datang, Tiara”.

---

#### 2️⃣ Struktur Kondisi (Switch)

File: `kondisi_switch.php`

```php
<?php 
$nama_hari = date("l"); 
switch ($nama_hari) { 
  case "Sunday": echo "Minggu"; break; 
  case "Monday": echo "Senin"; break;
  case "Tuesday": echo "Selasa"; break;
  case "Wednesday": echo "Rabu"; break;
  case "Thursday": echo "Kamis"; break;
  case "Friday": echo "Jumat"; break;
  case "Saturday": echo "Sabtu"; break;
  default: echo "Hari tidak diketahui";
}
?>
```

📍 **Cara akses:**
👉 `http://localhost/lab7_php_dasar/kondisi_switch.php`
📸 **Hasil:**

![Gambar](https://github.com/tir890/Lab7Web/blob/8c3b8d11483efa967a7ed16daf5b83d00f462d6d/image.png)

Menampilkan nama hari saat ini dalam bahasa Indonesia.

---

#### 3️⃣ Struktur Perulangan (Contoh For)

File: `perulangan_for.php`

```php
<?php 
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
  echo "Perulangan ke: " . $i . "<br />";
}
?>
```

📍 **Hasil:**
Menampilkan angka 1 sampai 10 secara berurutan di browser.

---

### 💬 Kesimpulan

* PHP adalah *server-side scripting language* yang dijalankan melalui server (Apache).
* Variabel di PHP menggunakan tanda `$`.
* Struktur logika seperti `if`, `switch`, dan `for` sama konsepnya dengan bahasa pemrograman lain.
* Parameter seperti `$_GET` digunakan untuk menerima data dari URL.
* Setiap kode PHP harus dijalankan melalui web server, bukan dibuka langsung dari file explorer.

---

### 🗂️ Struktur Folder

```
lab7_php_dasar/
│
├── php_dasar.php
├── kondisi_switch.php
├── perulangan_for.php
└── README.md
```

---

### 🧩 Catatan Tambahan

> * Pastikan **Apache** aktif saat membuka file PHP.
> * Jangan lupa tambahkan `?>` di akhir blok PHP kalau mau menutup tag.
> * Kalau muncul error “headers already sent”, periksa apakah ada spasi atau teks di luar `<?php ... ?>`
