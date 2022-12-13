<?php
    $text = "Questo è un paragrafo contentente parole scurrili come cazzo e coglione";
    $badWords = ["cazzo", "coglione"];
    $censure = "***";

    $newText =  str_replace($badWords,$censure,$text);

    echo $newText;
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
    <h1>Ciao</h1>
    <p><?php echo $newText ?></p>
</body>
</html>