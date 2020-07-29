<?php
    function ubah_huruf($string){
        //kode di sini
        $huruf = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o',
                  'p','q','r','s','t','u','v','w','x','y','z'];
        $result = "";
        for ($i=0; $i<strlen($string); $i++){
            $position = array_search($string[$i], $huruf) + 1; 
            if ($position == count($huruf)) $position = 0;
            $result .= $huruf[$position]; 
        }
        return $result;
    }

    // TEST CASES
    echo "Kata awal = wow => ".ubah_huruf('wow'); echo "<br>";// xpx
    echo "Kata awal = developer => ".ubah_huruf('developer'); echo "<br>";// efwfmpqfs
    echo "Kata awal = laravel => ".ubah_huruf('laravel'); echo "<br>";// mbsbwfm
    echo "Kata awal = keren => ".ubah_huruf('keren'); echo "<br>";// lfsfo
    echo "Kata awal = semangat => ".ubah_huruf('semangat'); echo "<br>";// tfnbohbu
    echo "Kata awal = zumba => ".ubah_huruf('zumba'); echo "<br>";// avncb
?>