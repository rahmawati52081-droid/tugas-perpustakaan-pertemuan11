<?php
/*
Nama : Rahmawati
Kelas : TI-2D
NPM : 250102123
*/

require_once("koneksi.php");

$sql = "SELECT * FROM anggota";
$data = mysqli_query($koneksi, $sql);

$array = mysqli_fetch_all($data, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan Rahma</title>
</head>
<body>
    <h2>Data Anggota Perpustakaan</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>No Anggota</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Jenis Anggota</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($array as $ar) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($ar['no_anggota']); ?></td>
                    <td><?php echo htmlspecialchars($ar['nama_lengkap']); ?></td>
                    <td><?php echo htmlspecialchars($ar['email']); ?></td>
                    <td><?php echo htmlspecialchars($ar['no_hp']); ?></td>
                    <td><?php echo htmlspecialchars($ar['jenis_anggota']); ?></td>
                    <td><?php echo htmlspecialchars($ar['alamat']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>