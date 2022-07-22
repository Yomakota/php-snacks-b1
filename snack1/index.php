<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ## Snack 1
    //Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.Olimpia Milano - Cantù | 55-60

    $games = [
        [
            'teams' => [
                'home' => 'Olimpia Milano',
                'away' => 'Cantù',
            ],
            'score' => [
                'home' => 55,
                'away' => 60,
            ]
        ],
        [
            'teams' => [
                'home' => 'Golden State Warriors',
                'away' => 'Boston Celtics',
            ],
            'score' => [
                'home' => 120,
                'away' => 108,
            ]
        ],
        [
            'teams' => [
                'home' => 'Los Angeles Lakers',
                'away' => 'Dallas',
            ],
            'score' => [
                'home' => 93,
                'away' => 124,
            ]
        ],
        [
            'teams' => [
                'home' => 'Clippers',
                'away' => 'Miami',
            ],
            'score' => [
                'home' => 88,
                'away' => 102,
            ]
        ]
    ];
    ?>

    <h1>Games Results:</h1>
    <?php if (count($games) > 0) { ?>
        <ul>
            <?php for ($i = 0; $i < count($games); $i++) { ?>
                <?php $game = $games[$i]; ?>
                <li>
                    <div>
                        <?php echo $game['teams']['home'] ?>
                        <?php echo '-' ?>
                        <?php echo $game['teams']['away'] ?>
                        <?php echo '|' ?>
                        <?php echo $game['score']['home'] . '-' . $game['score']['away'] ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

</body>

</html>