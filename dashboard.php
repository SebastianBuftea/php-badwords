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
        <div class="row my-5 justify-content-center">
            <div class="col-5 back_g_gray m-2">
                <h3>Ciao questo è il testo originale</h3>
                <div class="border_text"> <?php echo $text?></div>
                <h5 class="my-2">Lunghezza: <?php echo strlen($text)?></h5>
            </div>
            <div class="col-5 back_g_gray m-2">
                <h3> Questo invece è il testo modificato</h3>
                <div class="border_text"> <?php echo $new_text?></div>
                <h5 class="my-2">Lunghezza: <?php echo strlen($new_text)?></h5>
            </div>
        </div>
    </div>
</body>
</html>