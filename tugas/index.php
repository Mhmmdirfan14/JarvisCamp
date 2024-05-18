<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <div class="container my-5">
        <h3>Form Produk</h3>
        <form action="produk.php" method="post">
  <div class="form-group">
    <label for="barang">Nama Barang</label> 
    <input id="barang" name="barang" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="harga">Harga</label> 
    <input id="harga" name="harga" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label> 
    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="stok">Stok</label> 
    <input id="stok" name="stok" type="number" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>

    </div>
</body>
</html>