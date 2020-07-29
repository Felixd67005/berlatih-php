<?php
    function palindrome($kata){
        $status = true;
        $pjg = floor(strlen($kata) / 2);
        $i = 0;
        $j = strlen($kata)-1;
        do 
        {
            if ($kata[$i] != $kata[$j]) {
                $status = false; $i = $pjg ;}
            $i++; $j--;
        }
        while($i <= $pjg);
        return $status;
    } 
    
    function palindrome_angka($angka) {
        // tulis kode di sini
        if ($angka > 0 && $angka < 9) return $angka += 1;
        else{
            $blnOut = false;
            do{
                $angka += 1;
                
                if (palindrome(strval($angka))) {
                    $blnOut = true;
                }
            } while (!$blnOut);
        }
        return $angka;
    }

    // TEST CASES
    echo palindrome_angka(8); echo "<br>";// 9
    echo palindrome_angka(10); echo "<br>"; // 11
    echo palindrome_angka(117); echo "<br>"; // 121
    echo palindrome_angka(175); echo "<br>"; // 181
    echo palindrome_angka(1000); // 1001
?>