<?php

function soal ($style){
    $jawabanIsset = "isset adalah fungsi untuk memeriksa apakah sebuah variabel telah diatur atau belum";
    $jawabanEmpty = "empty adalah fungsi untuk memeriksa apakah sebuah variabel kosong atau tidak";

    echo "<p style = '$style'>$jawabanIsset</p>";
    echo "<p style = '$style'>$jawabanEmpty</p>";
}

//memanggil fungsi soal () dengan style CSS
soal ("font-size: 16px; font-family : Arial; color: #RRGGBB");

?>