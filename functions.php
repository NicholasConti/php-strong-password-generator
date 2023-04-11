<?php
// CONTROLLO SE L' INPUT HA UN VALORE
if (!empty($_GET['passLength'])) {
    $lenght = $_GET['passLength'];
    generateRandomString($lenght);
    header('Location: ./show.php');
}
//FUNZIONE CHE GENERA UNA PASSWORD CASUALE PARTENDO DALLA LUNGHEZZA RISCHIESTA DALL UTENTE
function generateRandomString($lunghezza)
{
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+-*/=#@,./!?£$%^&{}[]'; // CARATTERI DISPONIBILI
    $_SESSION['password'] = substr(str_shuffle($permitted_chars), 0, $lunghezza);
    return $_SESSION['password'];
}
