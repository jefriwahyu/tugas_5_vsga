<?php

    // variabel untuk menampung angka bilangan

    $bilangan1 = 9;
    $bilangan2 = 3;

    // fungsi penjumlahan

    function penjumlahan($x, $y){
        $a = $x + $y;
        return $a;
    }

    // fungsi pengurangan

    function pengurangan($x, $y){
        $b = $x - $y;
        return $b;
    }

    // fungsi perkalian

    function perkalian($x, $y){
        $c = $x * $y;
        return $c;
    }

    // fungsi pembagian
    
    function pembagian($x, $y){
        $d = $x / $y;
        return $d;
    }

    // menampilkan semua fungsi

    echo "bilangan 1 : $bilangan1 <br/>";   // bilangan angka 9
    echo "bilangan 2 : $bilangan2 <br />";  // bilangan angka 3
    echo "=========================<br />"; // pembatas
    echo "hasil penjumlahan adalah : ".penjumlahan($bilangan1, $bilangan2)."<br />";    // hasil penjumlahan
    echo "hasil pengurangan adalah : ".pengurangan($bilangan1, $bilangan2)."<br />";    // hasil pengurangan
    echo "hasil perkalian adalah : ".perkalian($bilangan1, $bilangan2)."<br />";        // hasil perkalian
    echo "hasil pembagian adalah : ".pembagian($bilangan1, $bilangan2)."";              // hasil pembagian
 


?>