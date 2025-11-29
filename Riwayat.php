<?php
// baca file JSON
if (file_exists("riwayat.json")) {
    $riwayat = json_decode(file_get_contents("riwayat.json"), true);
} else {
    $riwayat = [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Riwayat Latihan</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h1>Riwayat Latihan</h1>

    <table>
        <tr>
            <th>Tanggal</th>
            <th>Level</th>
            <th>HP</th>
            <th>Catatan</th>
        </tr>

        <?php if (count($riwayat) > 0): ?>
            <?php foreach ($riwayat as $r): ?>
                <tr>
                    <td><?= $r["tanggal"]; ?></td>
                    <td><?= $r["level"]; ?></td>
                    <td><?= $r["hp"]; ?></td>
                    <td><?= $r["catatan"]; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">Belum ada data latihan</td></tr>
        <?php endif; ?>
    </table>

    <a href="index.php" class="btn-back">Kembali</a>
</div>

</body>
</html>