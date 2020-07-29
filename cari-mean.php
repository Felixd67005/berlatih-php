<?php

    function cari_mean($arr){
        //kode di sini
        $total = 0;
        for ($i=0; $i<count($arr); $i++){
            $total += $arr[$i];
        }
        $mean = round($total / count($arr));
        return $mean;
    }

    // TEST CASE 
    echo "Mean dari [1, 2, 3, 4, 5] = " .cari_mean([1, 2, 3, 4, 5]); echo "<br>";// 3
    echo "Mean dari [3, 5, 7, 5, 3] = " .cari_mean([3, 5, 7, 5, 3]); echo "<br>";// 5
    echo "Mean dari [6, 5, 4, 7, 3] = " .cari_mean([6, 5, 4, 7, 3]); echo "<br>";// 5
    echo "Mean dari [1, 3, 3] = " .cari_mean([1, 3, 3]); echo "<br>";// 2
    echo "Mean dari [7, 7, 7, 7, 7] = " .cari_mean([7, 7, 7, 7, 7]); echo "<br>";// 7

?>