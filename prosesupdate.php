<?php
include 'koneksi.php';
$idlama = $_GET['id_obat'];
$id_obat = $_POST['id_obat'];
$nama = $_POST['nama'];
$supplier = $_POST['supplier'];
$stok = $_POST['stok'];
$expire = $_POST['expire'];

$query = mysqli_query($koneksi, "UPDATE tbobat SET id_obat='$id_obat', nama='$nama', supplier='$supplier', stok='$stok', expire='$expire' WHERE id_obat='$idlama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else {
    echo "Gagal memperbarui data";
}

?>