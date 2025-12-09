<?php
// File untuk mengecek konfigurasi hosting Byethost
// Jalankan file ini untuk melihat informasi tentang server Anda
echo "<h2>Informasi Hosting Anda</h2>";

echo "<h3>Informasi Server:</h3>";
echo "Nama Server: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Alamat IP Server: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Versi PHP: " . phpversion() . "<br>";
echo "Sistem Operasi Server: " . php_uname() . "<br>";

echo "<h3>Beberapa kemungkinan format host database di Byethost:</h3>";
echo "<ul>";
echo "<li>sql108.byethost7.com</li>";
echo "<li>sql109.byethost7.com</li>";
echo "<li>mysql</li>";
echo "<li>localhost</li>";
echo "</ul>";

echo "<h3>Cara mengetahui informasi database yang benar:</h3>";
echo "<ol>";
echo "<li>Login ke akun Byethost Anda</li>";
echo "<li>Masuk ke Control Panel atau cPanel</li>";
echo "<li>Cari menu 'MySQL Databases' atau 'Databases'</li>";
echo "<li>Di sana akan ada informasi seperti:</li>";
echo "<li style='margin-left: 30px;'>- Database Name: contoh formatnya: b7_35xxxxxx_cv</li>";
echo "<li style='margin-left: 30px;'>- Username: contoh formatnya: b7_35xxxxxx</li>";
echo "<li style='margin-left: 30px;'>- Host: contoh formatnya: sql108.byethost7.com</li>";
echo "<li style='margin-left: 30px;'>- Password: (sudah Anda buat saat pertama kali setup)</li>";
echo "<li>Ganti file config.php dengan informasi tersebut</li>";
echo "</ol>";

echo "<h3>Format file config.php yang benar:</h3>";
echo "<pre>";
echo "// Konfigurasi Database untuk Byethost\n";
echo "$db_host = 'NAMA_HOST_DATABASE'; // contoh: sql108.byethost7.com\n";
echo "$db_user = 'USERNAME_DATABASE';  // contoh: b7_35xxxxxx\n";
echo "$db_pass = 'PASSWORD_DATABASE';  // password yang Anda buat\n";
echo "$db_name = 'NAMA_DATABASE';     // contoh: b7_35xxxxxx_cv\n";
echo "</pre>";

echo "<h3>Langkah setelah mengganti config.php:</h3>";
echo "<ol>";
echo "<li>Upload kembali file config.php yang sudah diedit</li>";
echo "<li>Import file SQL ke database baru Anda di Byethost</li>";
echo "<li>Akses file buat_admin.php untuk membuat akun admin</li>";
echo "<li>Setelah itu, hapus file buat_admin.php untuk keamanan</li>";
echo "</ol>";

echo "<h3>Catatan penting:</h3>";
echo "<ul>";
echo "<li>File SQL bisa Anda dapatkan dari file: cv/dbcv (1).sql</li>";
echo "<li>Untuk import file SQL, gunakan phpMyAdmin di Byethost</li>";
echo "<li>Jika tidak bisa login admin, pastikan tabel-tabel database sudah dibuat</li>";
echo "</ul>";
?>