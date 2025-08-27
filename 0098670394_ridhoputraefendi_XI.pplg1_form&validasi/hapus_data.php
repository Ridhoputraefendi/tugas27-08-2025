<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id='$id'";
    if ($koneksi->query($query)) {
        header("Location: tampil_data.php");
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
