<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Anggota Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1  { color: #1f3864; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        label.pilihan { display: inline; font-weight: normal; margin-right: 16px; }
        input[type="text"], select, textarea { width: 321px; padding: 6px; }
        button { margin-top: 16px; padding: 8px 20px; }
    </style>
</head>
<body>
    <h1>Form Anggota Perpustakaan</h1>

     <form action="proses_anggota.php" method="post">
        <label for="no_anggota">Nomor Anggota</label>
        <input type="text" name="no_anggota" id="no_anggota">

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="no_hp">No HP</label>
        <input type="text" name="no_hp" id="no_hp">

        <label for="jenis_anggota">Jenis Anggota</label>
        <select name="jenis_anggota" id="jenis_anggota">
            <option value="">-- Pilih Jenis Anggota Perpustakaan --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
        </select>

        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" rows="4"></textarea>

        <button type="submit">Kirim</button>
     </form>
</body>
</html>