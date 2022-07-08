<?php
include "koneksi.php";
$id_obat = $_GET['id_obat'];

$query = mysqli_query($koneksi, "DELETE FROM tbobat WHERE id_obat='$id_obat'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else {
    echo "Gagal menghapus data";
}
?>