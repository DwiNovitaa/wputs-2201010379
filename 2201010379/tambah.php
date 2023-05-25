<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Silahkan login terlebih dahulu."); window.location.href = "login.php";</script>';
    exit();
}
include 'layout/header.php';

// check apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_mhs($_POST) > 0) {
        echo "<script> alert('Data Mahasiswa Berhasil Ditambahkan'); document.location.href = 'datamahasiswa.php';</script>";
    } else {
        echo "<script> alert('Data Mahasiswa Gagal Ditambahkan'); document.location.href = 'datamahasiswa.php';</script>";
    }
}
?>

<div class="container mt-5">
    <h1>Tambah Data Mahasiswa</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa..." required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM Mahasiswa..." required>
        </div>
        <div class="mb-3">
            <label for="no_tlp" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="no_tlp" name="no_tlp" placeholder="No Telepon..." required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="@email" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat..." required>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control" required>
                    <option value="">-- pilih prodi --</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                    <option value="DKV">DKV</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control" required>
                    <option value="">-- pilih jurusan --</option>
                    <option value="MTI">MTI</option>
                    <option value="KAB">KAB</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                    <option value="DKV">DKV</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
    </form>
</div>

<?php
include 'layout/footer.php';
?>


