<?php
## Snack 6
//Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

//Creare un array contenente qualche alunno di un’ipotetica classe.
$students = [
    [
        "name" => "Mario",
        "lastName" => "Rossi",
        "grade" => [8, 7, 6, 9],
    ],
    [
        "name" => "Giuseppe",
        "lastName" => "Verdi",
        "grade" => [6, 7, 8, 8],
    ],
    [
        "name" => "Giulia",
        "lastName" => "Bianchi",
        "grade" => [5, 6, 7, 8],
    ],
    [
        "name" => "Maria",
        "lastName" => "Marrone",
        "grade" => [8, 9, 9, 7],
    ],
];
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
    <!-- Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <div>
        <?php for ($i = 0; $i < count($students); $i++) { ?>
            <div>
                <?php echo $students[$i]['name'] ?>
                <?php echo $students[$i]['lastName'] ?>
                <?php echo setVote($students[$i]['grade']) ?>
            </div>
        <?php } ?>
    </div>

    <?php
    //Function per media-voto
    function setVote($grade)
    {
        $sum = 0;
        for ($i = 0; $i < count($grade); $i++) {
            $sum += $grade[$i];
            $average_grade = $sum / count($grade);
        }
        return $average_grade;
    }
    ?>
</body>

</html>