<?php
/*

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

*/


$result = "Inserisci i parametri";

$length = $_GET["length"];


function gen_psw($length)
{

    //Vari elementi che potrebbe contenere la psw
    $letters = "abcdefghilmnopqrstuvzxywjkABCDEFGHILMNOPQRSTUVZXYWJK";

    $numbers = "1234567890";

    $symbols = "!$%&/()=?-_,;.:@#[+*]";

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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bs link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>




    <header>
        <div class="container">
            <h1>Strong Password Generator</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <h3>Genera una password sicura</h3>
        </div>
    </div>






    <!-- cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>