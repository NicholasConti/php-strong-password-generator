<?php
// CONTROLLO SE L' INPUT HA UN VALORE
if (!empty($_GET['passLength'])) {
    $lenght = $_GET['passLength'];
}
//FUNZIONE CHE GENERA UNA PASSWORD CASUALE PARTENDO DALLA LUNGHEZZA RISCHIESTA DALL UTENTE
function generateRandomString($lunghezza)
{
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+-*/=#';
    return substr(str_shuffle($permitted_chars), 0, $lunghezza);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="GET">
        <label for="nWords">Lunghezza Password:</label>
        <input type="number" name="passLength" id="nWords" placeholder="Inserisci il numero di caratteri">
        <button>CREA</button>
        <?php if (!empty($_GET['passLength'])) : ?>
            <div><?php echo generateRandomString($lenght); ?></div>
        <?php endif; ?>
    </form>
</body>

</html>