<?php
// Membuat associative array dengan data flora dan fauna yang hampir punah di Indonesia
$floraFaunaTerancam = array(
    "Spesies 1" => array(
        "Nama" => "Harimau Sumatera",
        "Penjelasan" => "Harimau Sumatera adalah subspesies harimau yang hanya ditemukan di pulau Sumatera, Indonesia. Populasinya sangat terancam punah karena perburuan dan hilangnya habitat.",
        "Jumlah Populasi" => "Kira-kira 400 individu",
        "Daerah" => "Sumatera, Indonesia",
        "Gambar" => "harimau.jpg"
    ),
    "Spesies 2" => array(
        "Nama" => "Badak Jawa",
        "Penjelasan" => "Badak Jawa adalah spesies badak yang ditemukan di Jawa, Indonesia. Populasinya sangat terancam punah karena perburuan dan perusakan habitat.",
        "Jumlah Populasi" => "Kira-kira 68 individu",
        "Daerah" => "Jawa, Indonesia",
        "Gambar" => "badak-jawa.jpg"
    ),
    "Spesies 3" => array(
        "Nama" => "Orangutan Kalimantan",
        "Penjelasan" => "Orangutan Kalimantan adalah spesies orangutan yang tinggal di Kalimantan, Indonesia. Mereka menghadapi ancaman habitat yang terus berkurang dan perburuan ilegal.",
        "Jumlah Populasi" => "Kira-kira 104,700 individu",
        "Daerah" => "Kalimantan, Indonesia",
        "Gambar" => "orangutan.jpg"
    ),
    "Spesies 4" => array(
        "Nama" => "Komodo",
        "Penjelasan" => "Komodo adalah spesies kadal raksasa yang hanya ditemukan di pulau Komodo, Indonesia. Mereka menghadapi ancaman dari perburuan ilegal dan perusakan habitat.",
        "Jumlah Populasi" => "Kira-kira 4,000 individu",
        "Daerah" => "Pulau Komodo, Indonesia",
        "Gambar" => "komodo.jpg"
    ),
    "Spesies 5" => array(
        "Nama" => "Harimau Malaya",
        "Penjelasan" => "Harimau Malaya adalah subspesies harimau yang ditemukan di Semenanjung Malaya, Malaysia dan Indonesia. Populasi mereka terancam punah akibat perburuan ilegal dan perusakan habitat.",
        "Jumlah Populasi" => "Kira-kira 250 individu",
        "Daerah" => "Semenanjung Malaya, Malaysia dan Indonesia",
        "Gambar" => "harimau-malaya.jpg"
    ),
    "Spesies 6" => array(
        "Nama" => "Gajah Sumatera",
        "Penjelasan" => "Gajah Sumatera adalah subspesies gajah yang hanya ditemukan di pulau Sumatera, Indonesia. Populasi mereka terancam punah akibat perburuan ilegal dan hilangnya habitat.",
        "Jumlah Populasi" => "Kira-kira 1,700 individu",
        "Daerah" => "Sumatera, Indonesia",
        "Gambar" => "gajah.jpg"
    ),
    "Spesies 7" => array(
        "Nama" => "Badak Sumatera",
        "Penjelasan" => "Badak Sumatera adalah subspesies badak yang hanya ditemukan di Sumatera, Indonesia. Populasi mereka sangat terancam punah karena perburuan ilegal dan perusakan habitat.",
        "Jumlah Populasi" => "Kira-kira 100 individu",
        "Daerah" => "Sumatera, Indonesia",
        "Gambar" => "badak-sumatera.jpg"
    ),
    "Spesies 8" => array(
        "Nama" => "Penyu Hijau",
        "Penjelasan" => "Penyu Hijau adalah spesies penyu yang berkembang biak di pantai-pantai Indonesia. Mereka terancam punah karena perburuan telur dan hilangnya habitat pesisir.",
        "Jumlah Populasi" => "Kira-kira 200,000 individu",
        "Daerah" => "Pantai-pantai Indonesia",
        "Gambar" => "penyu.jpg"
    ),
    "Spesies 9" => array(
        "Nama" => "Kakatua Raja",
        "Penjelasan" => "Kakatua Raja adalah spesies burung yang ditemukan di Indonesia, terutama di Papua. Mereka terancam punah akibat perdagangan ilegal dan hilangnya habitat.",
        "Jumlah Populasi" => "Kira-kira 6,000 individu",
        "Daerah" => "Papua, Indonesia",
        "Gambar" => "kakaktua.jpg"
    ),
    "Spesies 10" => array(
        "Nama" => "Harimau Benggala",
        "Penjelasan" => "Harimau Benggala adalah spesies harimau yang ditemukan di India, Bangladesh, dan Nepal. Mereka terancam punah akibat perburuan ilegal dan perusakan habitat.",
        "Jumlah Populasi" => "Kira-kira 2,500 individu",
        "Daerah" => "India, Bangladesh, dan Nepal",
        "Gambar" => "harimau-benggala.jpg"
    ),
);

// Mencetak tabel
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Penjelasan</th><th>Jumlah Populasi</th><th>Daerah</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($floraFaunaTerancam as $spesies) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $spesies["Nama"] . "</td>";
    echo "<td>" . $spesies["Penjelasan"] . "</td>";
    echo "<td>" . $spesies["Jumlah Populasi"] . "</td>";
    echo "<td>" . $spesies["Daerah"] . "</td>";
    echo "<td><img src='" . $spesies["Gambar"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>
