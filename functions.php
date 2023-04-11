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
