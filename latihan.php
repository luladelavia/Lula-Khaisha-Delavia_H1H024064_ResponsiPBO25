<?php
require_once "classes/Alakazam.php";
$p = new Alakazam("Alakazam", "Psychic", 5, 120);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Latihan Pokémon</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
    <h1>Latihan Pokémon – <?= $p->getName(); ?></h1>

    <form action="proses_latihan.php" method="POST">
        <label>Jenis Latihan:</label>
        <select name="jenis" required>
            <option value="Attack">Attack</option>
            <option value="Defense">Defense</option>
            <option value="Speed">Speed</option>
        </select>

        <label>Intensitas (angka):</label>
        <input type="number" name="intensitas" required min="1">

        <button type="submit">Mulai Latihan</button>
    </form>

    <a href="index.php" class="btn-back">Kembali ke Beranda</a>
</div>
</body>
</html>