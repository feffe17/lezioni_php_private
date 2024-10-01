<?php

//Finora abbiamo visto solo un tipo di variabile, gli Interi

$numero = 10; //INTERO

//Ci sono pero altri tipi di dato che andiamo a salvare, in funzione del problema che
//dobbiamo risolvere

$stringa = "pollo"; //STRINGA
$boolean = true; //BOOLEAN (Valori true/false). Si scrive SENZA virgolette "

//Anche questi tipi di dato, come gli interi, si possono comprarare (If)
//Le tecniche pero, per quanto molto simili, hanno alcuni dettagli da tenere a mente


//BOOLEAN
//I boolean, essendo vero o falso, possono evitare la sintassi completa.
//Puo essere indicato come true o false, o come 1 e 0 in base al sistema binario
// 1 = true / 0 = false

    //Un esempio di sintassi completa è
        if($boolean==true){
            echo "Faccio qualcosa<br>";
        }

    //Mentre la comodità che consente il boolean, è questa
        if($boolean){
            echo "Faccio altro<br>";
        }

//STRINGA
//Le stringhe possono essere comparate in due modi.

    //Il modo ==, che pero non è Caps Sensitive (non gli importa se maiuscole o minuscole
        if($stringa == "pollo"){
            echo "Siamo uguali<br>";
        }

    //Il modo strcmp(), che è una funzione integrata di php (come l'if), e compara due
    //stringhe in modo Caps Sensitive, e torna 0 se sono uguali
        if(strcmp($stringa,"pollo") == 0){
            echo "Si lo siamo<br>";
        }


?>