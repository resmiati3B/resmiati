<?php

$mahasiswa = [
    "001"=> "rismiati",
    "002"=> "avantika",
    "003"=> "eviyuli",
    "004"=> "winda",
    "005"=> "predi"];
    //untuk memasukan value,kita harus membuat key yang merepresentasikan valuenya.
    //tanda "=>" dapat diartikan sebagai merujuk
    //"key" =>"value"

?>

<!DOCTYPE html >
<html lang = "en">
    <head>
        <meta charsct="UTF-8">
        <title>array associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama):?>
        <li><?php echo "$nrp : $nama"?></11>
        <?php endforeach ?>
    </body>
    </html>