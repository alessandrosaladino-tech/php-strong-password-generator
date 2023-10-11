<?php 


$result = "Inserisci i parametri";

$length = $_GET["length"];


function gen_psw($length)
{

    //Vari elementi che potrebbe contenere la psw
    $letters = "ABCDEFGHILMNOPQRSTUVZXYWJKabcdefghilmnopqrstuvzxywjk";

    $numbers = "1234567890";

    $symbols = "@!$%*=?-]_,/.:;#()[+&";

    //Container per le tutte e 3 le variabili
    $psw_container = $letters . $numbers . $symbols;

    // Variabile iniziale per la password
    $password = "";

    // Se la password è minore della lunghezza inserita dall'utente continua a generare
    while (strlen($password) < $length) {

        //Genereremo un numero random che corrisponderà ad un carattere nella variabile psw_container
        $random = rand(0, strlen($psw_container) - 1);

        //Il char è uguale al random generato in precedenza che è presente il psw_container
        $char = $psw_container[$random];

        //Password è uguale a char
        $password .= $char;
    }

    //Ritorna la password
    return $password;
};

// Se inseriamo la lunghezza dal form il result sarà gen_psw
if (isset($_GET["length"])) {
    $result = gen_psw($length);
}
