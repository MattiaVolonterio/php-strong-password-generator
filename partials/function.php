<?php

/**
 * 
 * @param int $psw_length La lunghezza desiderata per la password da generare
 * @param string $char_list La stringa che contiene i caratteri utili per generare la password
 * 
 * @return string La stringa contenete la password generata
 */
function generate_random_password($psw_length, $char_list, $multi_char)
{
    $password_array = [];
    $chars_length = strlen($char_list);

    if ($multi_char === "true") {
        while (count($password_array) < $psw_length) {
            $random_index = rand(0, $chars_length - 1);
            $password_array[] = $char_list[$random_index];
        }
    }

    if ($multi_char === "false") {

        while (count($password_array) < $psw_length) {
            $random_index = rand(0, $chars_length - 1);

            if (!in_array($char_list[$random_index], $password_array)) {
                $password_array[] = $char_list[$random_index];
            }
        }
    }
    return implode("", $password_array);
}