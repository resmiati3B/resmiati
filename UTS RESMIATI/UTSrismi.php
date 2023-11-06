<?php

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Minyak Telon", 20, 30000),
    array(2, "Diapers", 15, 51000),
    array(3, "Baby Oil", 10, 16000),
    array(4, "Shampo Baby", 18, 20000),
    array(5, "Bedak", 15, 15000),
    array(6, "Baju Bayi", 20, 35000),
    array(7, "Jumper", 25, 50000),
);

$totalJumlah = 0; // Variabel untuk menyimpan total jumlah produk

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // Hitung jumlah produk
    $totalJumlah += $jumlah; // Tambahkan jumlah produk ke total
    $row[] = $jumlah; // Tambahkan jumlah produk ke array produk
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // Tampilkan total jumlah produk

$diskon = 0; // Variabel untuk menyimpan jumlah diskon

// Cek total pembelian untuk menentukan diskon
if ($totalJumlah >= 200000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // Diskon 10%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // Hitung jumlah diskon
    $totalBayar = $totalJumlah - $totalDiskon; // Hitung total yang harus dibayar setelah diskon
    echo "<br>Discount: " . ($diskon * 100) . "%"; // Tampilkan persentase diskon
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar; // Tampilkan total yang harus dibayar setelah diskon
}

$tanggal_transaksi = "06 November 2023";


$produk_dibeli = array(
    array("Produk" => "Baju Bayi", "Jumlah" => 1, "Harga" => 35500),
    array("Produk" => "Diapers", "Jumlah" => 3, "Harga" => 51000),
    array("Produk" => "Bedak", "Jumlah" => 1, "Harga" => 15000),
    array("Produk" => "Minyak Telon", "Jumlah" => 2, "Harga" => 30000)
);

// Hitung total pembelian
$total_pembelian = 0;

foreach ($produk_dibeli as $produk) {
    $total_pembelian += $produk["Jumlah"] * $produk["Harga"];
}

// Diskon
$diskon = 0;
if ($total_pembelian >= 200000) {
    $diskon = 0.20;
} elseif ($total_pembelian >= 150000) {
    $diskon = 0.10;
}

//  total pembayaran setelah diskon
$total_pembayaran_setelah_diskon = $total_pembelian - ($total_pembelian * $diskon);


echo "<h2>Tanggal Transaksi: $tanggal_transaksi</h2>";

echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Jumlah</th></tr>";
foreach ($produk_dibeli as $produk) {
    echo "<tr>";
    echo "<td>{$produk['Produk']} ({$produk['Jumlah']}X" . number_format($produk['Harga'], 0, '.', ',') . ")</td>";
    echo "<td>" . number_format($produk['Jumlah'] * $produk['Harga'], 0, '.', ',') . "</td>";
    echo "</tr>";
}
echo "<tr><th>Total:</th><td>" . number_format($total_pembelian, 0, '.', ',') . "</td></tr>";
echo "<tr><th>Diskon:</th><td>" . number_format($diskon * 100, 0) . "%</td></tr>";
echo "<tr><th>Total Pembayaran:</th><td>" . number_format($total_pembayaran_setelah_diskon, 0, '.', ',') . "</td></tr>";
echo "</table>";



?>
