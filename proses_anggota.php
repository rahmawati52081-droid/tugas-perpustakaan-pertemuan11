<?php
require_once "koneksi.php";

$no_anggota     = $_POST['no_anggota'] ?? '';
$nama_lengkap   = $_POST['nama_lengkap'] ?? '';
$email          = $_POST['email'] ?? '';
$no_hp          = $_POST['no_hp'] ?? '';
$jenis_anggota  = $_POST['jenis_anggota'] ?? '';
$alamat         = $_POST['alamat'] ??'';

$sql    = "INSERT INTO anggota(no_anggota, nama_lengkap, email, no_hp, jenis_anggota, alamat) VALUES (?, ?, ?, ?, ?, ?)";
$stmt   = mysqli_prepare($koneksi, $sql);

if (!$stmt) {
    die("Query gagal: " . mysqli_error($koneksi));
}

mysqli_stmt_bind_param($stmt, "ssssss", $no_anggota, $nama_lengkap, $email, $no_hp, $jenis_anggota, $alamat);

if (mysqli_stmt_execute($stmt)) {
    echo "Data anggota berhasil disimpan!";
} else {
    echo "Data gagal disimpan: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>