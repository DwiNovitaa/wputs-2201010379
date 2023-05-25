<?php 
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Silahkan login terlebih dahulu."); window.location.href = "login.php";</script>';
    exit();
}
$title = 'Detail Mahasiswa';

include 'layout/header.php';

// mengambil id mahasiswa dari url
$id_mhs = (int)$_GET['id_mhs'];

// menampilkan data mahasiswa
$mahasiswa = select("SELECT * FROM tb_mhs WHERE id_mhs = $id_mhs")[0];

?>

    <div class="container mt-5">
        <h1>Data <?= $mahasiswa['nama']; ?></h1>
        <hr>

        <table class="table table-bordered table-striped mt-3">
            <tr>
                <td width="20%">Nama</td>
                <td>: <?= $mahasiswa['nama']; ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: <?= $mahasiswa['nim']; ?></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>: <?= $mahasiswa['no_tlp']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?= $mahasiswa['email']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?= $mahasiswa['alamat']; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: <?= $mahasiswa['jurusan']; ?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>: <?= $mahasiswa['prodi']; ?></td>
            </tr>
        </table>

        <a href="datamahasiswa.php" class="btn btn-secondary btn-sm" style="float: right ;">Kembali</a>
    </div>

    
<?php include 'layout/footer.php'; ?>