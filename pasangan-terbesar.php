<?php
    function pasangan_terbesar($angka){
        // kode di sini
        $blnOut = false;
        $max = 0; $awal = 0; 
        $angka = strval($angka);
        //echo ($angka);echo "<br>";
        do{
            $nilai = "";
            for ($i=$awal; $i<=($awal+1); $i++){
                $nilai .= $angka[$i];                
            }
            if (intval($nilai) > $max) $max = $nilai;
            $awal += 1;
            if ($awal == strlen($angka)-1) $blnOut = true;
        }while (!$blnOut);
        return $max;
    }

    // TEST CASES
    echo "Pasangan terbesar dari 641573 = ". pasangan_terbesar(641573); echo "<br>";// 73
    echo "Pasangan terbesar dari 12783456 = ". pasangan_terbesar(12783456);echo "<br>"; // 83
    echo "Pasangan terbesar dari 910233 = ". pasangan_terbesar(910233); echo "<br>";// 91
    echo "Pasangan terbesar dari 71856421 = ". pasangan_terbesar(71856421); echo "<br>";// 85
    echo "Pasangan terbesar dari 79918293 = ". pasangan_terbesar(79918293); echo "<br>"; // 99
?>