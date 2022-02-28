<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = $db['teachers'];
$pms = $db['pm'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gray {
            background-color: gray;
        }

        .green {
            background-color: green;
        }
    </style>
</head>

<body>
    <?php foreach ($db as $role => $people) { ?>
        <div class="<?= $role === 'pm' ? 'green' : 'gray' ?>">
            <ul>
                <?php foreach ($people as $person) : ?>
                    <li><?= "$person[name] $person[lastname]" ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php } ?>
</body>

</html>