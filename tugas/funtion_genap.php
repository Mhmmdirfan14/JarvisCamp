<?php  

function hitungGenap($angkaPertama, $angkaTerakhir) {
    if ($angkaPertama % 2   != 2) {
        $angkaPertama++;
    }


    for ($i= $angkaPertama; $i <= $angkaTerakhir; $i += 2) {
        echo $i . " ";
    }
}

hitungGenap(1, 100);

    
 
?>