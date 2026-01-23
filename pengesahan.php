<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot = $_POST['slot'];

$harga_unit = 2500;
$jumlah = $harga_unit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Pengesahan Pendaftaran</h2>

    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>No Telefon:</strong> <?php echo $telefon; ?></p>
    <p><strong>Kategori:</strong> <?php echo $kategori; ?></p>
    <p><strong>Bilangan Slot:</strong> <?php echo $slot; ?></p>

    <hr>

    <p><strong>Jumlah Yuran:</strong> RM <?php echo number_format($jumlah, 2); ?></p>
</div>

</body>
</html>