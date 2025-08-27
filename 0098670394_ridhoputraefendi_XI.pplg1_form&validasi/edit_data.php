<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

$data = mysqli_fetch_assoc($result);
?>

<form method="POST" action="update_data.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data['email']; ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
    <button type="submit">Update</button>
</form>
