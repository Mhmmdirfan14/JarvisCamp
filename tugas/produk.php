<?php  
// membuat array berisi nama dan warna sayuran
$products = [
    ["barang" => "Printer", "harga" => "1200000", "deskripsi" => "Printer merk HP", "stok" => "15"],
    ["barang" => "Tablet", "harga" => "2000000", "deskripsi" => "Tablet merk Samsung", "stok" => "8"],
    ["barang" => "Mouse", "harga" => "150000", "deskripsi" => "Mouse merk Logitech", "stok" => "50"],
    ["barang" => "Speaker", "harga" => "500000", "deskripsi" => "Speaker merk JBL", "stok" => "25"],
    ["barang" => "Headset", "harga" => "150000", "deskripsi" => "Headset merk Sony", "stok" => "30"],
];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Proses tambah data
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    // Tambah data baru ke array
    $products[] = ["barang" => $barang, "harga" => $harga, "deskripsi" => $deskripsi, "stok" => $stok];
} else{
    header("Location: index.php");
}

?>

<!-- Menampilkan data array di table -->
<!DOCTYPE html>
<html lang="en">m
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<style>
    h3 {
        text-align: center;
        color: #EF476F;
        font-size: 2rem;

    }
      table{
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    th{
        border: 1px solid;
        border-color: black;
        background-color: #EF476F;
        color: white;
        height: 3rem;
        width: 3rem;
    }

    td{
        border: 1px solid;
        border-color: black;
        color: black;
        height: 3rem;
        width: 3rem;
    }
</style>
<body>
<h3>Daftar Produk</h3>
<table border="1">
    <tr>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Deskripsi</th>
    <th>Stok</th>
    <?php foreach ($products as $produk) { ?>
        <tr>
            <td><?=  $produk["barang"];?></td>
            <td><?=  $produk["harga"];?></td>
            <td><?=  $produk["deskripsi"];?></td>
            <td><?=  $produk["stok"];?></td>
        </tr>
    </tr>
 
    <?php } ?>
    </table>
</body>
</html>




