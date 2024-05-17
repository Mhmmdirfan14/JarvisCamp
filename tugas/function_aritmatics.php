<?php 

function hitungArimatika($angka1, $angka2, $operator)  {
    $hasil = 0;
    // menggunakan operator switch
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = $angka1 / $angka2;
            break;
        }
        return $hasil;
}

// Hitung penjumlahan
echo "Hasil penjumlahan:" . hitungArimatika(10, 5, '+') . "<br/>";

// Hitung pengurangan
echo "Hasil pengurangan:" . hitungArimatika(22, 6, '-') . "<br/>";

// Hitung perkalian
echo "Hasil perkalian:" . hitungArimatika(17, 7, '*') . "<br/>";

// Hitung pembagian
echo "Hasil pembagian:" . hitungArimatika(20, 4, '/') . "<br/>";


?>