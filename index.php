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
        <div class="row my-2">
            <div class="col-12 text-center">
                <h1>INSERISCI IL TESTO E LA PAROLA DA CENSURARE</h1>
            </div>
        </div>
        <div class="col-12">
            <form action="dashboard.php" method="GET">
                <label for="control-label">Testo</label>
                <textarea type="text" rows="5" cols="40" name="testo" id="text" placeholder="inserire il testo" class="form-control" required></textarea>
                <div class="row d-flex py-3">
                    <div class="col-3">
                        <label for="control-label">Parola da sostituire</label>
                        <input type="text" name="parola" id="word" placeholder="inserire la parola da sostituire" class="form-control" required>
                    </div>
                    <div class="col-1 align-self-end">
                        <button type="submit" class="btn btn-success">Invia</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>