<?php
    function tentukan_deret_geometri($arr) {
        // kode di sini
        $isGeometrik= false; $blnOut = false;
        $awal = $arr[0]; $i = 0; $rasio = 0;
        $rasioTmp = 0; $result = true;
        do{
            $i++;
            if ($i < count($arr)){
                $rasio = $arr[$i] / $awal;
                if($i>1 && $rasio != $rasioTmp) {
                    $blnOut = true; $result = false;
                }
                $awal = $arr[$i];
                $rasioTmp = $rasio;
            }
            else $blnOut = true;
        }while (!$blnOut);
        if ($result) return "true";
        else return "false";
    }
    
    //TEST CASES
    echo "Apakah [1, 2, 3, 4, 5, 6] adalah deret geometri ? ".tentukan_deret_geometri([1, 3, 9, 27, 81]); echo "<br>";// true
    echo "Apakah [2, 4, 8, 16, 32] adalah deret geometri ? ".tentukan_deret_geometri([2, 4, 8, 16, 32]); echo "<br>";// true
    echo "Apakah [2, 4, 6, 8] adalah deret geometri ? ".tentukan_deret_geometri([2, 4, 6, 8]); echo "<br>";// false
    echo "Apakah [2, 6, 18, 54] adalah deret geometri ? ".tentukan_deret_geometri([2, 6, 18, 54]); echo "<br>";// true
    echo "Apakah [1, 2, 3, 4, 7, 9] adalah deret geometri ? ".tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); echo "<br>";//false
?>