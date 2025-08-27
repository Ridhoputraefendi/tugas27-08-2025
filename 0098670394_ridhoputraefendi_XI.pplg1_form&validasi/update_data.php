<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE siswa SET nama='$nama', email='$email', alamat='$alamat' WHERE id='$id'";
    if ($koneksi->query($query)) {
        header("Location: tampil_data.php");
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
