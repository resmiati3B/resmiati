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

    foreach ($nama as $absen) {//foreach akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";

    }
    ?>
    </body>
    </html>