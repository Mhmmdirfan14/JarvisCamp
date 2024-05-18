<?php 
$motor  = ["Honda","Yamaha","Suzuki","Kawasaki"];

// Panjang array
echo count($motor); // 4
echo "<br>";

// Tambah elemen di akhir
array_push($motor, "Harley Davidson");
print_r($motor);

// Cek elemen pada array
var_dump(in_array("Suzuki",$motor)); //true

// menghapus elemen di akhir
$last = array_pop($motor);
print_r($last);

// menghapus semua elemen
unset($motor);
?>