<?php
function passwordRandom($lunghezza_password) {
    $pass = [];

    $array_lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $array_lettere_maiucole = array_map('strtoupper', $array_lettere);
    $array_numeri = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $array_simboli = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];

    $array_totale = array_merge($array_lettere, $array_lettere_maiucole, $array_numeri, $array_simboli);

    $lunghezza_tot = count($array_totale) - 1;

    for($i= 0; $i < $lunghezza_password; $i++) {
        $n = rand(0, $lunghezza_tot);
        $pass[] = $array_totale[$n]; 
    }
    return implode($pass);
}
?>
