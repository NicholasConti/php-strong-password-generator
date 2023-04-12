<?php
include __DIR__ . '/functions.php';
include __DIR__ . '/session.php';
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

<body class="vh-100 d-flex align-items-center">
    <div class="card container-lg border-success mb-3 text-center">
        <!-- <?php if (!empty($_GET['passLength'])) : ?>
            <div class="card-header">
                <div><?php echo generateRandomString($lenght); ?></div>
            </div>
        <?php endif; ?> -->
        <h2>Password Generator</h2>
        <div class="card-body">
            <form action="index.php" method="GET">
                <label for="nWords">Lunghezza Password:</label>
                <input type="number" name="passLength" id="nWords" placeholder="Inserisci il numero di caratteri">
                <button>CREA</button>
            </form>
        </div>
    </div>



</body>

</html>