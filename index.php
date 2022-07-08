<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
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
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline ">Dashboard</span></a>
                            </li>
                            <li>
                                <a href="tambah.php" class="nav-link px-0"> <span class="d-none d-sm-inline ">Mendaftarkan Obat</span></a>
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
    <div class="container p-2" style="background-color: white;">
        <h3 >Tabel Data Obat</h3>
        <table class="table">
            <thead>
                <th>Kode Obat</th>
                <th>Nama</th>
                <th>Supplier</th>
                <th>Stok</th>
                <th>Tanggal Kadaluarsa</th>
            </thead>
            <tbody> 
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM tbobat") or die(mysqli_error($koneksi));
                foreach ($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['id_obat']; ?></td>
                    <td><?php echo $baris['nama']; ?></td>
                    <td><?php echo $baris['supplier']; ?></td>
                    <td><?php echo $baris['stok']; ?></td>
                    <td><?php echo $baris['expire']; ?></td>
                    <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    </div
        </div>
    </div>
</div>
    
</body>
</html>