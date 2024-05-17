<?php 
    $nilai1 = 105;
    $nilai2 = 95;

    echo "Nilai 1 = $nilai1 <br/> Nilai 2 = $nilai2 <br/>";
    
    if ($nilai1 > $nilai2) {
        echo "<br />Nilai 1 lebih besar dari Nilai 2";
    } elseif ($nilai1 < $nilai2) { 
        echo "Nilai 1 lebih kecil dari Nilai 2";
    } elseif ($nilai1 === $nilai2) {
        echo "Nilai 1 dan 2 sama";
    } else {
       echo "Tidak diketahui";
    };

?>