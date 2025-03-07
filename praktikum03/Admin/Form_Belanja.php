<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<body style="background-color: lightpink;">
<form action="Form_Belanja.php" method="post">
<div class="container mt-4">
    <h3 class="mb-5" style="color: blue;"><b>Belanja Online</b></h3>
        <div class="row d-flex justify-content-between">
        <div class="col-md-8">
            <b><div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Customer</label> 
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div> 
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="produk" class="col-4">Pilih Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Lemari" required="required"> 
                        <label for="produk_1" class="custom-control-label">Lemari</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_2" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_3" type="radio" required="required" class="custom-control-input" value="Light Stick"> 
                        <label for="produk_3" class="custom-control-label">Light Stick</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-3">
                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
            </div> </b>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column">
            <div class="card">
                <div class="card-header bg-primary text-white"><b>Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 4.200.000</li>
                    <li class="list-group-item">Lemari : Rp 3.100.000</li>
                    <li class="list-group-item">Kulkas : Rp 3.800.000</li>
                    <li class="list-group-item">Light Stick : Rp 6.500.000</li>
                </ul>
                <div class="card-footer text-muted">Harga Dapat Berubah Setiap Saat</div>
            </div>
        </div>
    </div>
</div>
</form>
<hr>

<?php
    $_nama = $_POST['nama'];
    $_produk = $_POST['produk'];
    $_jumlah = (int)$_POST['jumlah'];

    $harga_produk = [
        "TV" => 4200000,
        "Lemari" => 3100000,
        "Kulkas" => 3800000,
        "Light Stick" => 6500000
    ];
    $total_harga = $harga_produk[$_produk] * $_jumlah;

    echo "Nama : $_nama <br>";
    echo "Produk : $_produk <br>";
    echo "Jumlah : $_jumlah <br>";
    echo "Total Harga : Rp" .  number_format($total_harga, 0, ',', '.');
?>
</body>
</html>
