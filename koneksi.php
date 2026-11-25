<?php
mysqli_report(MYSQLI_REPORT_OFF);

// Parameter koneksi
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "db_perpustakaan";

// Membuat koneksi 
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die ("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
} else { 
    echo "Koneksi berhasil";
}

// Mengatur karakter agar huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4");
?>