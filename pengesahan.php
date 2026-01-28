<?php
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$telefon = htmlspecialchars($_POST['telefon']);
$kategori = htmlspecialchars($_POST['kategori']);
$slot = (int)$_POST['slot'];

$harga_unit = 2500;
$jumlah = $harga_unit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .confirmation-card {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            font-family: 'Segoe UI', sans-serif;
        }

        .confirmation-card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table th {
            background: #007bff;
            color: #fff;
            font-weight: normal;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
            text-align: right;
        }

        .print-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
        }

        .print-btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="confirmation-card">
    <h2>Pengesahan Pendaftaran</h2>

    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>No Telefon</th>
            <td><?php echo $telefon; ?></td>
        </tr>
        <tr>
            <th>Kategori Peserta</th>
            <td><?php echo $kategori; ?></td>
        </tr>
        <tr>
            <th>Bilangan Slot</th>
            <td><?php echo $slot; ?></td>
        </tr>
    </table>

    <p class="total">Jumlah Yuran: RM <?php echo number_format($jumlah, 2); ?></p>

    <button class="print-btn" onclick="window.print()">Cetak Pengesahan</button>
</div>

</body>
</html>