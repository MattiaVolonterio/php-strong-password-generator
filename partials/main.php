<?php

// inclusione del file function

require_once __DIR__ . "/function.php";

// variables
$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

// gestione del form
$form_sendt = !empty($_GET);
$multi_char = $_GET["same-char-selection"] ?? "true";


if ($form_sendt) {
    $password_length = (int) $_GET["password-length-selection"];

    session_start();
    $_SESSION["generated-password"] = generate_random_password($password_length, $chars, $multi_char);

    header("Location: ./showPassword.php");
}
