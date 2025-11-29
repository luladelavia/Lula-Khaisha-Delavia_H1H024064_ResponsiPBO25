<?php
require_once "classes/Alakazam.php";
$p = new Alakazam("Alakazam", "Psychic", 5, 120);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Beranda Pokémon</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
    <h1>Latihan Pokémon</h1>
    <h2>Informasi Pokémon</h2>

    <p><strong>Nama:</strong> <?= $p->getName(); ?></p>
    <p><strong>Tipe:</strong> <?= $p->getType(); ?></p>
    <p><strong>Level Awal:</strong> <?= $p->getLevel(); ?></p>
    <p><strong>HP Awal:</strong> <?= $p->getHp(); ?></p>
    <p><strong>Jurus Spesial:</strong> <?= $p->getSpecialMove(); ?></p>

    <a href="latihan.php" class="btn">Pergi ke Latihan</a>
    <a href="riwayat.php" class="btn-secondary">Lihat Riwayat</a>
</div>
</body>
</html>