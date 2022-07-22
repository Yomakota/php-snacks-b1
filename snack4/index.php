<?php
## Snack 4
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non est quis dolor vehicula dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam molestie lectus sit amet felis aliquam, vitae mattis quam consequat. Cras non cursus eros. Integer malesuada lacus sed diam consequat, sit amet hendrerit mi pulvinar. Vivamus finibus pulvinar odio eu fringilla. Aliquam ut efficitur mauris.";

//esplodo la stringa
$newParagraphs = explode(". ", $paragraph);
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
    <h1>
        Paragraph
    </h1>
    <p> <?php echo $paragraph ?> </p>
    <?php for ($i = 0; $i < count($newParagraphs); $i++) { ?>
        <h2>
            New Paragraph
        </h2>
        <p>
            <?php echo $newParagraphs[$i] ?>
            <?php echo '!' ?>
        </p>
    <?php } ?>
</body>

</html>