<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h4 style="margin: 20px;">Sistem Penelitian</h4>
    <h2 style="margin-left: 50px;">Belanja Online</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7" style="margin-left: 50px;">
            <form method="POST">   
            <div class="form-group row">
                <label for="costumer" class="col-4 col-form-label">Costumer</label> 
                <div class="col-8">
                <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>

            </div>
            <div class="col-md-4" style="margin-right: 50px;">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-white  text-uppercase  table-bordered">
                            <th>
                                daftar harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                TV : Rp. 4.200.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kulkas : Rp. 3.100.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mesin Cuci : Rp. 3.800.000
                            </td>
                        </tr>
                        <tr class="bg-primary text-white  text-uppercase  table-bordered">
                            <th>
                                harga dapat berubah setiap saat
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>   
        <div class="row" style="margin: 50px;">
            <div class="col-md-12">
                <table class="table">
                        <tr class="table-primary">
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                        <?php require_once "proses_belanja.php"; ?>
                        <tr class="table-secondary">
                            <td><?= $nama; ?></td>
                            <td><?= $produk; ?></td>
                            <td><?= $jumlah; ?></td>
                            <td><?= "Rp " . number_format($total_harga, 0, ",", "."); ?></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>