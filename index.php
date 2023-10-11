<?php
/*

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

*/


include __DIR__ . "./functions.php";

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
        <div class="container text-center">
            <h1>Strong Password Generator</h1>
        </div>
    </header>

    <div class="container text-center">

        <div class="row">
            <h3>Genera una password sicura</h3>
            <div class="col border rounded-2 p-3">
                <p class="m-0"><?= $result ?></p>
            </div>
        </div>

        <div class="col">

            <form action="" method="GET">
                <div class="mb-3 d-flex align-items-center mt-5">
                    <label for="length" class="form-label">Lunghezza Password:</label>
                    <input type="number" class="form-control ms-3" name="length" id="length" placeholder="" min="5" max="30" value="5" style="width: 4.5rem;">
                </div>

                <div class="d-flex align-items-center">

                    <h4>Consenti ripetizioni di uno o più caratteri</h4>

                    <div class="form-check" style="margin-left: 15rem;">
                        <input class="form-check-input" type="radio" name="no_repeat" id="no_repeat" value="repeat_chars">
                        <label class="form-check-label" for="no_repeat"> No</label>
                    </div>


                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="repeat" id="repeat" value="repeat_chars" checked>
                        <label class="form-check-label" for="repeat"> Si </label>
                    </div>

                </div>

                <div class="container d-flex justify-content-center align-items-center flex-column ms-5 text-center" style="padding-left: 5rem;">
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="letters" value="letters" checked>
                        <label class="form-check-label" for="letters">Lettere</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="numbers" value="numbers" checked>
                        <label class="form-check-label" for="numbers">Numeri</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="symbols" value="symbols" checked>
                        <label class="form-check-label" for="symbols">Simboli</label>
                    </div>
                </div>

                <div class="mt-3 text-start">
                    <button type="submit" class="btn btn-primary">Invia</button> 
                    <button type="reset" class="btn btn-dark">Annulla</button>
                </div>

            </form>



        </div>
    </div>






    <!-- cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>