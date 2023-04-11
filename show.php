<!DOCTYPE html>
<?php
include __DIR__ . './session.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra</title>
</head>
<!-- PAGINA CHE MOSTRA IL RISULTATO -->

<body>
    <h1>La tua password :</h1>
    <h3><?php echo $_SESSION['password']; ?></h3>
</body>

</html>