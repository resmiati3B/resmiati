<?php

$nama = ["rismi", "evi", "winda", "dara", "predi"];

?>

<!DOCTYPE html >
<html lang = "en">
    <head>
        <meta charsct="UTF-8">
        <title>looping for Array</title>
</head>
<body>
    <?php

    for ($i = 0; $i < count ($nama); $i++){ // count berguna untuk menentukan jumlah elemen ada array.
                                            // sehingga looping akan berhenti ketika isi array sudah tampil semua.
        echo "<li>$nama[$i]<//li>";

    }
    ?>
    </body>
    </html>