<?php
include 'koneksi.php';

$id_obat = $_POST['id_obat'];
$nama = $_POST['nama'];
$supplier = $_POST['supplier'];
$stok = $_POST['stok'];
$expire = $_POST['expire'];

$query = mysqli_query($koneksi, "INSERT INTO tbobat (id_obat, nama, supplier, stok, expire) VALUES ('$id_obat','$nama','$supplier', '$stok', '$expire')");

if($query){
    header("Location: index.php");
} else {
    echo "Gagal menginput data";
}
?>