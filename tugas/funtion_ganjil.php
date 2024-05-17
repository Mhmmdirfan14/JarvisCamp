<?php 

function hitungGanjil ($angkaPertama, $angkaTerakhir) {
    if ($angkaPertama % 2   == 0) {
        $angkaPertama++;
    }


    for ($i= $angkaPertama; $i <= $angkaTerakhir; $i += 2) {
        echo $i . " ";
    }
}

hitungGanjil(1, 100);


?>