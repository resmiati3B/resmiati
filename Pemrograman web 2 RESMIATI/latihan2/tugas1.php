<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
// Fungsi untuk memeriksa apakah sebuah bilangan prima
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Loop dari 1 hingga 20
for ($num = 1; $num <= 20; $num++) {
    if ($num % 2 == 0) {
        echo "$num adalah bilangan genap<br>";
    } else {
        if (isPrime($num)) {
            echo "$num adalah bilangan prima<br>";
        } else {
            echo "$num adalah bilangan ganjil<br>";
        }
    }
}
?>

</body>
<html>