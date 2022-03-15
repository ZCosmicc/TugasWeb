<?php
    $nilai = 90;

    if($nilai <= 50) {
        echo "E";
    }
    else if ($nilai <60) {
        echo "D";
    }
    else if ($nilai <70) {
        echo "C";
    }
    else if ($nilai <80) {
        echo "B";
    }
    else if ($nilai >100) {
        echo "Nilai tidak valid!";
    }
    else if ($nilai >=80) {
        echo "A";
    }    
?>