<?php
/*
    FAI ESERCIZI SU FUNZIONI BASATI SU ESERCIZI A SCELTA PRESI DA
    https://www.prodigygame.com/main-en/blog/math-word-problems/

    VANNO BENE TUTTI TRANNE QUELLI CON FOR
*/

function esercizio1($numeroTiriConCanestro,$numeroTiriFuori){
    $numeroTiriTotali = $numeroTiriConCanestro + $numeroTiriFuori;

    echo $numeroTiriTotali, "<br>";
    // OPZIONI 2 : return $numeroTiriTotali;
}

esercizio1(1,2);
// OPZIONE 2 : echo esercizio1();


/*Adrianna ha 10 gomme da masticare da condividere con i suoi amici. Non c'erano abbastanza gomme da masticare per tutti
 i suoi amici, quindi è andata al negozio a prendere altre 3 gomme da masticare.
 Quanti pezzi di gomma ha adesso Adrianna? */

function es2($gommeprima , $gommecomprate){
    $gommetotali = $gommeprima + $gommecomprate;
    return $gommetotali;
}
echo es2(10 , 3), "<br>";


/*la tua squadra ha segnato un totale di 123 punti. Nel primo tempo sono stati segnati 67 punti.
Quanti sono stati i gol nel secondo tempo? */

function es3($puntitotali , $punti1tempo){
    $punti2tempo = $puntitotali - $punti1tempo;
    return $punti2tempo;
}
echo es3(123 , 67), "<br>";


/*ci sono 235 libri in una biblioteca. Lunedì vengono ritirati 123 libri. Martedì vengono riportati 56 libri.
 Quanti libri ci sono adesso? */

function es4($libriiniziali , $libripresi , $libririportati){
    $librifinali = ($libriiniziali - $libripresi) + $libririportati;
    return $librifinali;
}
echo es4(235 , 123 , 56), "<br>";