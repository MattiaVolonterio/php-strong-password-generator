<?php

// inclusione del file function

require_once __DIR__ . "/function.php";

// variables
$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$special_chars = '`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

$char_num = $chars . $numbers;
$char_spec = $chars . $special_chars;
$num_spec = $numbers . $special_chars;
$chars_all = $chars . $numbers . $special_chars;


// gestione del form
$form_sendt = !empty($_GET);
$multi_char = $_GET["same-char-selection"] ?? "true";
$psw_type = $_GET["password-type"] ?? "all";

if ($form_sendt) {
    $password_length = (int) $_GET["password-length-selection"];

    if ($password_length) {
        session_start();
        if ($psw_type == "all") {
            $_SESSION["generated-password"] = generate_random_password($password_length, $chars_all, $multi_char);
        }

        if ($psw_type == "char+num") {
            $_SESSION["generated-password"] = generate_random_password($password_length, $char_num, $multi_char);
        }

        if ($psw_type == "char+spec") {
            $_SESSION["generated-password"] = generate_random_password($password_length, $char_spec, $multi_char);
        }

        if ($psw_type == "num+spec") {
            $_SESSION["generated-password"] = generate_random_password($password_length, $num_spec, $multi_char);
        }

        header("Location: ./showPassword.php");
    }

}
