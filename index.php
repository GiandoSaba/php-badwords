<?php
$par = "La vispa Teresa avea tra l'erbetta, a volo sorpresa gentil farfalletta. E tutta giuliva stringendola viva gridava a distesa: 'L'ho presa! L'ho presa!'. A lei supplicando l'afflitta gridò: 'Vivendo, volando che male ti fò? Tu sì mi fai male stringendomi l'ale! Deh, lasciami! Anch'io son figlia di Dio!'. Teresa pentita allenta le dita: 'Va', torna all'erbetta, gentil farfalletta'. Confusa, pentita, Teresa arrossì, dischiuse le dita e quella fuggì.La vispa Teresa avea tra l'erbetta, a volo sorpresa gentil farfalletta. E tutta giuliva stringendola viva gridava a distesa: 'L'ho presa! L'ho presa!'. A lei supplicando l'afflitta gridò: 'Vivendo, volando che male ti fò? Tu sì mi fai male stringendomi l'ale! Deh, lasciami! Anch'io son figlia di Dio!'. Teresa pentita allenta le dita: 'Va', torna all'erbetta, gentil farfalletta'. Confusa, pentita, Teresa arrossì, dischiuse le dita e quella fuggì.";
$lenPar = strlen($par);
$badword = $_GET['bad'];
$newPar = str_replace($badword, "***", $par);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <p><?= $par ?></p>
    <h2>Lunghezza paragrafo: <?= $lenPar ?></h2>
    <h3>Parola da censurare: <?= $badword ?></h3>
    <h1>Paragrafo censurato:</h1>
    <p><?= $newPar ?></p>
</body>

</html>