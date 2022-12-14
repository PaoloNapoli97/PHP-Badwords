<?php
    $text = "Questo è un paragrafo contentente parole scurrili come scemotto e biricchino";
    $censure = "***";
    $censure_word = isset($_GET['word']) ? $_GET['word'] : ''; 

    $newText =  str_replace($censure_word,$censure,$text);
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
    <!-- correzione -->
    <form action="index.php" method="GET">
        <label for="censure-word">parola da censurare</label>
        <input name="word" id="censure-word" type="text" placeholder="text">
        <button type="submit" >Invia</button>
    </form>
    <h1>Lunghezza Testo: <?php echo strlen($text); ?></h1>
    <p><?php echo $text ?></p>
    <hr>
    <p><?php echo $newText ?></p>
</body>
</html>