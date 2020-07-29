<?php
    function tentukan_deret_aritmatika($arr) {
        // kode di sini
        $isAritmatik = false; $blnOut = false;
        $awal = $arr[0]; $i = 0; $selisih = 0;
        $selisihTmp = 0; $result = true;
        do{
            $i++;
            if ($i < count($arr)){
                $selisih = abs($awal - $arr[$i]);
                if($i>1 && $selisih != $selisihTmp) {
                    $blnOut = true; $result = false;
                }
                $awal = $arr[$i];
                $selisihTmp = $selisih;
            }
            else $blnOut = true;
        }while (!$blnOut);
        if ($result) return "true";
        else return "false";
    }

    // TEST CASES
    echo "Apakah [1, 2, 3, 4, 5, 6] adalah deret aritmatika ? " .tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); echo "<br>";// true
    echo "Apakah [2, 4, 6, 12, 24] adalah deret aritmatika ? " .tentukan_deret_aritmatika([2, 4, 6, 12, 24]); echo "<br>";// false
    echo "Apakah [2, 4, 6, 8] adalah deret aritmatika ? " .tentukan_deret_aritmatika([2, 4, 6, 8]); echo "<br>";//true
    echo "Apakah [2, 6, 18, 54] adalah deret aritmatika ? " .tentukan_deret_aritmatika([2, 6, 18, 54]); echo "<br>";// false
    echo "Apakah [1, 2, 3, 4, 7, 9] adalah deret aritmatika ? " .tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]); echo "<br>";// false
?>