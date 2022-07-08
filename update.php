<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">

</head>
<body>
<div class="container-fluid p-5">
    <h2 class="text-center"><img src="img/logo.png" alt="" width="70px" style="padding-right: 10px;">Apotek RS Shaldy Medika</h2>
    </div>
    <div class="container p-2" style="background-color: white;">
        <h1>Update Data Obat</h1>
        <?php
        include 'koneksi.php';
        $id_obat = $_GET['id_obat'];
        $data = mysqli_query($koneksi, "SELECT * FROM tbobat WHERE id_obat = '$id_obat'") or die(mysqli_error($koneksi));
        $baris = mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
            <form action="prosesupdate.php?id_obat=<?php echo $id_obat; ?>" method="post">
            <label for="id_obat">Kode Obat</label>
            <input type="number" class="form-control" name="id_obat" value="<?php echo $baris['id_obat']; ?>">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $baris['nama']; ?>">
            <label for="supplier">Supplier</label>
            <input type="text" class="form-control" name="supplier" value="<?php echo $baris['supplier']; ?>">
            <label for="stok">Stok</label>
            <input type="text" class="form-control" name="stok" value="<?php echo $baris['stok']; ?>">
            <label for="expire">Tanggal Kadaluarsa</label>
            <input type="date" class="form-control" name="expire" value="<?php echo $baris['expire']; ?>"> <br>
            <button type="submit" class="btn btn-primary" name="button">Perbarui Data</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>