<?php
    function papan_catur($angka) {
        // tulis kode di sini
        for ($i=1; $i<=$angka; $i++){
            for ($j=1; $j<=$angka; $j++){
                if ($i % 2 == 0) {
                    if ($j != $angka ) echo "&nbsp&nbsp#";    
                }
                else echo "#&nbsp&nbsp";
            }
            echo "<br>";
        } 
    }

    // TEST CASES
    //echo papan_catur(4);
    /*
    # # # #
     # # #
    # # # #
     # # #
    */

    //echo papan_catur(8);
    /* 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    */

    echo papan_catur(5);
    /*
    # # # # #
     # # # #
    # # # # #
     # # # # 
    # # # # #
    */
?>