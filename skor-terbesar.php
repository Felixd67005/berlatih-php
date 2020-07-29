<?php
    function skor_terbesar($arr){
        //kode di sini
        $hasil = []; $Laravel = []; $ReactNat = []; $ReactJS = [];
        foreach($arr as $key => $value){
            $nama[$key] = $value["nama"];
            $kelas[$key] = $value["kelas"];
            $nilai[$key] = $value["nilai"];
        }
        array_multisort($kelas, SORT_ASC, $nilai, SORT_DESC, $arr);

        foreach($arr as $key => $value){
            $kelas = $value["kelas"];
            switch ($kelas){
                case "Laravel":{
                    //$Laravel[] = $value;
                    $Laravel[] = array($kelas => $value);       // adding at the end of array
                    break;
                }
                case "React Native":{
                    $ReactNat[] = array($kelas => $value);
                    break;
                }
                case "React JS":{
                    $ReactJS[] = array($kelas => $value);
                    break;
                }
            }
        }
        
        
        //cek isi array
        // print_r($Laravel); echo "<br>";     
        // print_r($ReactNat); echo "<br>";
        // print_r($ReactJS); echo "<br>";

        $hasil[] = $Laravel[0];$hasil[] = $ReactNat[0];$hasil[] = $ReactJS[0];

        return print_r($hasil);
    }

    // TEST CASES
    $skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    ];

    skor_terbesar($skor);
    //print_r(skor_terbesar($skor));
    /* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
    */
?>