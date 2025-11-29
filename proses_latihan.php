<?php
date_default_timezone_set('Asia/Jakarta');

$jenis = $_POST['jenis'];
$intensitas = $_POST['intensitas'];

$dataBaru = [
    "tanggal" => date("Y-m-d H:i"),
    "level" => rand(1, 10),       // contoh nilai dummy
    "hp" => rand(50, 150),        // contoh nilai dummy
    "catatan" => "$jenis - Intensitas $intensitas"
];

// Jika file belum ada, buat array kosong
if (!file_exists("riwayat.json")) {
    file_put_contents("riwayat.json", json_encode([]));
}

$riwayat = json_decode(file_get_contents("riwayat.json"), true);
$riwayat[] = $dataBaru;

file_put_contents("riwayat.json", json_encode($riwayat, JSON_PRETTY_PRINT));

header("Location: riwayat.php");
exit;