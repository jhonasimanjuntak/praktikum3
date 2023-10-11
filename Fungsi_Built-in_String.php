<?php
    $str = "Belajar PHP ternyata menyenangkan";
    echo strtolower($str); //Ubah huruf kecil semua
    echo "<br>";
    echo strtoupper($str); //Ubah huruf ke besar semua
    echo "<br>";
    echo str_replace("Menyenangkan","mudah lho", $str);
    //Mengganti string
?>