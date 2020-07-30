<?php
    // release 0
    require_once ('animal.php');
    require_once ('frog.php');
    require_once ('ape.php');
    $sheep = new Animal("shaun");

    // echo $sheep->name(); // "shaun"
    // echo $sheep->legs(); // 2
    // echo $sheep->cold_blooded() // false

    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
    echo "Release 0";echo "<br>";
    echo "Animal name = ".$sheep->get_name(); echo "<br>"; // "shaun"
    echo "Animal legs = ".$sheep->get_legs(); echo "<br>";// 2
    echo "Is cold blood ? ".$sheep->get_cold_blooded(); echo "<br>";// false

    echo "<br>";
    echo "Release 1";echo "<br>";
    $sungokong = new Ape("kera sakti");
    echo "kera sakti yell ". $sungokong->yell(); // "Auooo"

    echo "<br>";
    $kodok = new Frog("buduk");
    echo "buduk jump ". $kodok->jump() ; // "hop hop"
?>