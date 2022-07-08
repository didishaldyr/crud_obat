<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-dark">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                            <li>
                                <a href="index.php" class="nav-link px-0"> <span class="d-none d-sm-inline ">Dashboard</span></a>
                            </li>
                            <li">
                                <a href="kelola.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Perbarui/Hapus Data Obat</span></a>
                            </li>
                        </ul>
                    </li>
            </div>
        </div>
        <div class="col py-3">
        <div class="container-fluid p-5">
    <h2 class="text-center"><img src="img/logo.png" alt="" width="70px" style="padding-right: 10px;">Apotek RS Shaldy Medika</h2>
    </div>
    <div class="container p-2 center" style="background-color: white;">
        <h3>Tambah Data</h3>
        <div class="col-md-6">
        <form action="prosestambah.php" method="POST">
            <label for="id_obat">Kode Obat</label>
            <input type="number" name="id_obat" id="id_obat" class="form-control">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
            <label for="supplier">Supplier</label>
            <input type="text" name="supplier" id="supplier" class="form-control">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control">
            <label for="expire">Tanggal Kadaluarsa</label>
            <input type="date" name="expire" id="expire" class="form-control"> <br>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

    </div>
    </div>
    </div
        </div>
    </div>
</div>
</body>
</html>