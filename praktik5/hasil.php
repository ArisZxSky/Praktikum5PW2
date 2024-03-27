<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    include 'PersegiPanjang.php';

    $persegiPanjang = new PersegiPanjang($panjang, $lebar);

    echo "panjang: " . $persegiPanjang->getPanjang() . "<br>";
    echo "lebar: " . $persegiPanjang->getLebar() . "<br>";
    echo "luas: " . $persegiPanjang->hitungLuas() . "<br>";
    echo "keliling: " . $persegiPanjang->hitungKeliling() . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Panjang</th>
                <th scope="col">Lebar</th>
                <th scope="col">Luas</th>
                <th scope="col">Keliling</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?= $panjang ?></td>
                <td><?= $lebar ?></td>
                <td><?= $panjang * $lebar ?></td>
                <td><?= $panjang + $lebar * 2 ?></td>
            </tr>
        </tbody>

    </table>
</body>
</html>