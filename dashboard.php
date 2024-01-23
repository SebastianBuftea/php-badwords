<?php 
$text = $_GET['testo'];
$word = $_GET['parola'];

$new_text= str_replace($word, '***', $text)
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Ciao questo è il testo originale</h3>
                <div> <?php echo $text?></div>
                <div> <?php echo strlen($text)?></div>
            </div>
            <div class="col-6">
                <h3>Ciao questo è il testo modificato</h3>
                <div> <?php echo $new_text?></div>
                <div> <?php echo strlen($new_text)?></div>
            </div>
        </div>
    </div>
</body>
</html>