<?php
    function tukar_besar_kecil($string){
        //kode di sini
        $strResult = '';
        for($i=0; $i<strlen($string); $i++){
            if($string[$i] == strtoupper($string[$i])) $strResult .= strtolower($string[$i]);
            else $strResult .= strtoupper($string[$i]);
        }
        return $strResult;
    }

    // TEST CASES
    echo "Kata awal = 'Hello World' => ".tukar_besar_kecil('Hello World'); echo "<br>";// "hELLO wORLD"
    echo "Kata awal = 'I aM aLAY' => ".tukar_besar_kecil('I aM aLAY'); echo "<br>";// "i Am Alay"
    echo "Kata awal = 'My Name is Bond!!' => ".tukar_besar_kecil('My Name is Bond!!'); echo "<br>";// "mY nAME IS bOND!!"
    echo "Kata awal = 'IT sHOULD bE me' => ".tukar_besar_kecil('IT sHOULD bE me'); echo "<br>";// "it Should Be ME"
    echo "Kata awal = '001-A-3-5TrdYW' => ".tukar_besar_kecil('001-A-3-5TrdYW'); echo "<br>";// "001-a-3-5tRDyw"
?>