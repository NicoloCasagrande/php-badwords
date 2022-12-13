<?php 
    $phrase = 'Questa è una frase che contiene tante volte al parola frase ma proprio tante volte la parola frase, frase, frase, frase';
    $badWord = $_GET['badWord'];
    $newPhrase = str_replace($badWord, '***', $phrase);
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
    <h1><?php echo $phrase; ?></h1>
    <h2>Numero lettere:  <?php echo strlen($phrase); ?></h2>
    <h1><?php echo $newPhrase ?></h1>
    <h2>Numero lettere:  <?php echo strlen($newPhrase); ?></h2>
</body>
</html>