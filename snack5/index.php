<?php
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.


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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Snack-5</h1>
    <div>
        <h2>Teachers</h2>
        <?php for ($i = 0; $i < count($db['teachers']); $i++) { ?>
            <div class="grey">
                <?php echo $db['teachers'][$i]['name']  ?>
                <?php echo $db['teachers'][$i]['lastname'] ?>
            </div>
        <?php } ?>
    </div>
    <div>
        <h2>PM</h2>
        <?php for ($i = 0; $i < count($db['pm']); $i++) { ?>
            <div class="green">
                <?php echo $db['pm'][$i]['name'] ?>
                <?php echo $db['pm'][$i]['lastname'] ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>