<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Upload ke Byethost</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f5f7fb;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2, h3 {
            color: #4e73df;
        }
        .step {
            background: #f8f9fa;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 4px solid #4e73df;
        }
        .warning {
            background: #fff3cd;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 4px solid #ffc107;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panduan Upload ke Byethost</h1>
        
        <h2>Langkah-langkah:</h2>
        
        <div class="step">
            <h3>Langkah 1: Upload File ke Hosting</h3>
            <p>Gunakan File Manager di cPanel Byethost atau FTP Client seperti FileZilla:</p>
            <ul>
                <li>Upload semua file dari folder <code>cv</code> ke folder root hosting Anda</li>
                <li>Yakinkan semua file PHP, CSS, JS dan gambar sudah terupload</li>
            </ul>
        </div>
        
        <div class="step">
            <h3>Langkah 2: Buat dan Setup Database</h3>
            <p>Di cPanel Byethost, buat database baru:</p>
            <ul>
                <li>Masuk ke menu <strong>MySQL Databases</strong></li>
                <li>Buat database baru</li>
                <li>Buat user database baru</li>
                <li>Assosiasikan user dengan database</li>
            </ul>
        </div>
        
        <div class="step">
            <h3>Langkah 3: Import Database</h3>
            <p>Gunakan phpMyAdmin di Byethost untuk mengimport file SQL:</p>
            <ul>
                <li>Masuk ke <strong>phpMyAdmin</strong></li>
                <li>Pilih database yang baru dibuat</li>
                <li>Klik tab <strong>Import</strong></li>
                <li>Pilih file <code>dbcv (1).sql</code> dari folder Anda</li>
                <li>Klik <strong>Go</strong> untuk mengimport</li>
            </ul>
        </div>
        
        <div class="step">
            <h3>Langkah 4: Update File config.php</h3>
            <p>Ganti konfigurasi database di file <code>config.php</code> dengan informasi dari Byethost:</p>
            <pre style="background: #f1f1f1; padding: 10px; overflow-x: auto;">
// Konfigurasi Database untuk Byethost
$db_host = 'NAMA_HOST_DATABASE'; // contoh: sql108.byethost7.com
$db_user = 'USERNAME_DATABASE';  // contoh: b7_35xxxxxx
$db_pass = 'PASSWORD_DATABASE';  // password yang Anda buat
$db_name = 'NAMA_DATABASE';     // contoh: b7_35xxxxxx_cv</pre>
        </div>
        
        <div class="step">
            <h3>Langkah 5: Akses File bantuan</h3>
            <p>Untuk memastikan semuanya bekerja, akses file berikut di browser Anda:</p>
            <ul>
                <li><code>namadomainanda.000webhostapp.com/cek_hosting.php</code> - untuk informasi hosting</li>
                <li><code>namadomainanda.000webhostapp.com/buat_tabel_admin.php</code> - untuk membuat admin</li>
            </ul>
        </div>
        
        <div class="step">
            <h3>Langkah 6: Login Admin</h3>
            <p>Setelah semua selesai:</p>
            <ul>
                <li>Akses <code>namadomainanda.000webhostapp.com/admin/login.php</code></li>
                <li>Login dengan username dan password admin yang telah dibuat</li>
            </ul>
        </div>
        
        <div class="warning">
            <h3>PERINGATAN KEAMANAN:</h3>
            <p>Setelah berhasil membuat akun admin, segera hapus file <code>buat_admin.php</code> dan <code>buat_tabel_admin.php</code> dari server Anda untuk mencegah akses tidak sah.</p>
        </div>
        
        <h2>Catatan Tambahan:</h2>
        <ul>
            <li>Jika muncul error koneksi database, pastikan nama host, username, password, dan nama database benar</li>
            <li>Format nama database di Byethost biasanya seperti: b7_35xxxxxx_nama_database</li>
            <li>Format username database di Byethost biasanya seperti: b7_35xxxxxx</li>
            <li>Nama host biasanya seperti: sql108.byethost7.com (akan tercantum di email konfirmasi)</li>
        </ul>
    </div>
</body>
</html>