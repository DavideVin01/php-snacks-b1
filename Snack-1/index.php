<?php

#NAME
$name = $_GET['name'] ?? '';

if (!strlen($name)) {
    echo 'Inserire un nome. <br>';
} elseif (strlen($name) < 3) {
    echo 'Inserire un nome con più di 3 caratteri. <br>';
} else {
    echo $name, '<br>';
}

#MAIL
$mail = $_GET['mail'] ?? '';

if (empty($mail)) {
    echo 'Nessuna mail inserita.';
} else {
    if (strpos($mail, '@') && strpos($mail, '.')) {
        echo 'Mail corretta: ', $mail, '<br>';
    } else {
        echo 'Mail non corretta. <br>';
    }
}


#AGE
$age = $_GET['age'] ?? '';

if (is_numeric($age)) {
    echo 'La tua età è: ', $age, ' anni. <br>';
} else {
    echo "L'età dev'essere numerica. <br>";
}

if ((strlen($name) > 3) && (strpos($mail, '@') && strpos($mail, '.')) && (is_numeric($age))) {
    echo 'Accesso riuscito!';
} else {
    echo 'Accesso negato.';
}

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

</body>

</html>