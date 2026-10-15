<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

$ransum = [
    "pizza" => ["nama" => "Pizza Segitiga Polus", "harga" => 25000, "minuman" => false],
    "susu" => ["nama" => "Susu Elektrik Electrical", "harga" => 18000, "minuman" => true],
    "donut" => ["nama" => "Space Donut Oxygen", "harga" => 15000, "minuman" => false],
    "jus" => ["nama" => "Jus Berry MedBay", "harga" => 20000, "minuman" => true],
    "steak" => ["nama" => "Emergency Steak Navigation", "harga" => 45000, "minuman" => false],
];


// Hitung harga
$harga = 0;
$subtotal = $harga * $jumlah;

$namaRansum = $ransum[$menu]["nama"];
$harga = $ransum[$menu]["harga"];
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if($kategori== "crewmate" && $ransum[$menu]["minuman"]&& $jumlah>= 3) {
    $diskon = $subtotal*0.15;
}

// total harga
$total = $subtotal;

// cek valid
$valid = true;
$pesan = "";