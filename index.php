<?php
// Memanggil file koneksi yang sudah kita buat tadi
include 'koneksi.php';

// Mengambil data dari tabel mahasiswa
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #333; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Daftar Mahasiswa Universitas</h2>
    <a href="tambahdata.php"><button>tambah data</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No HP</th>
            <th>aksi</th>
        </tr>
        
        <?php 
        // Melakukan perulangan untuk menampilkan data satu per satu
        while($data = mysqli_fetch_array($query)) { 
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['prodi']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td>
                <a href="editdata.php"><button>edit data</button></a>
            <a href="deletedata.php"><button>hapus</button></a></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>