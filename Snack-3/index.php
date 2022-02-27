<?php
$min = 1;
$max = 100;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>15 Numeri Generati Casualmente:</h1>
    <p>
        <?php for ($i = 0; $i < 15; $i++) { ?>
            <?= rand($min, $max) ?>
        <?php } ?>
        <?php return ?>
    </p>
</body>

</html>