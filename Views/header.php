<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<!--data-bs-theme="dark"-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>php-Hotel</title>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Hotel</h1>
        </div>
        <div class="container">
            <form action="index.php" methods:"GET">
                <input type="text" placeholder="Inserisci un valore...">
                <select name="filtro">
                    <option value="all">Mostra tutti</option>
                    <option value="parcheggio">con parcheggio</option>
                    <option value="senzaParcheggio">Senza parcheggio</option>
                </select>
                <button type="submit" class="bg-success">Invia</button>
                <button type="reset">reset</button>
            </form>
        </div>

    </header>

</body>