<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH</title>
</head>
<body>
    <h2>kontrol SWITCH</h2>
    <?php
    $angka_mutu=1;
    echo("Angka mutu $angka_mutu<br>");
    switch($angka_mutu)
    {
        case 0: echo("Huruf mutu E"); break;
        case 1: echo("Huruf mutu D"); break;
        case 2: echo("Huruf mutu C"); break;
        case 3: echo("Huruf mutu B"); break;
        case 4: echo("Huruf mutu A"); break;
        default: echo("Huruf mutu tidak di kenal");
    }
    ?>
</body>
</html>