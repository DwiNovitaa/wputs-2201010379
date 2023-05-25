<?php

// fungsi menampilkan data
function select($query)
{
    //memanggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

//fungsi menambahkan data mahasiswa
function create_mhs($post)
{
    global $db;

    $nama = $post['nama'];
    $nim = $post['nim'];
    $no_tlp = $post['no_tlp'];
    $email = $post['email'];
    $alamat = $post['alamat'];
    $prodi = $post['prodi'];
    $jurusan = $post['jurusan'];

    //query tambah data
    $query = "INSERT INTO tb_mhs VALUES(null, '$nama', '$nim', '$no_tlp', '$email', '$alamat', '$prodi', '$jurusan')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

//fungsi mengubah data mahasiswa
function update_mhs($post)
{
    global $db;

    $id_mhs = $post['id_mhs'];
    $nama = $post['nama'];
    $nim = $post['nim'];
    $no_tlp = $post['no_tlp'];
    $email = $post['email'];
    $alamat = $post['alamat'];
    $prodi = $post['prodi'];
    $jurusan = $post['jurusan'];

    //query ubah data
    $query = "UPDATE tb_mhs SET nama = '$nama', nim = '$nim', no_tlp = '$no_tlp', email = '$email', alamat = '$alamat', prodi = '$prodi', jurusan = '$jurusan' WHERE id_mhs = $id_mhs";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data mahasiswa
function delete_mhs($id_mhs)
{
    global $db;

    //query hapus data mahasiswa
    $query = "DELETE FROM tb_mhs WHERE id_mhs = $id_mhs";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


