<?php
$paragrafo ='Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates consequatur, officiis a iste, asperiores voluptate, eligendi libero dolorem autem laboriosam amet.';
$lunghezza = strlen($paragrafo);
$utente = $_GET['utente'];
$nuovoparagrafo = str_replace($utente, '***', $paragrafo);
$nuovalunghezza = strlen($nuovoparagrafo);
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
    <h1> <?php echo $paragrafo. ' '. '(lunghezza ' .$lunghezza. ')' ?> </h1>

    <h2> <?php echo $nuovoparagrafo. ' '. '(lunghezza ' .$nuovalunghezza. ')' ?> </h2>

</body>
</html>