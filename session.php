<?php

session_start();

if (!isset($_SESSION['password'])) {
    $_SESSION['password'] = '';
}
