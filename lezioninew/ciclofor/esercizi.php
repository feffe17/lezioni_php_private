<?php

/* esercizi presi da https://codegrind.it/esercizi/php/ciclo-for#-esercizio-1 */

//Scrivere un programma PHP che stampa i numeri da 1 a 10.

for($i = 1 ; $i < 11 ; $i ++){
    echo $i;
}
echo "<br>";
//Scrivere un programma PHP che calcola la somma dei numeri da 1 a 100.

$somma = 0;
for($i = 1 ; $i < 101 ; $i ++){
    $somma =  ($i + $somma);
}
echo $somma, "<br>";

//Scrivere un programma PHP che stampa i numeri pari da 1 a 20.

for($i = 1 ; $i < 21 ; $i ++){
    if($i % 2 == 0){
        echo $i;
    }
}
echo "<br>";

//Scrivere un programma PHP che calcola il prodotto dei numeri da 1 a 10

$prodotto = 1;
for($i = 1 ; $i < 11 ; $i ++){
    $prodotto = ($i * $prodotto);
}
echo $prodotto, "<br>";

//Scrivere un programma PHP che stampa la tabellina del 5 (da 5 a 50)

for($i = 1 ; $i < 11 ; $i ++){
    echo (5 * $i),"<br>";
}

function test(){
    $somma = 0;
    for($i=5 ; $i <=10 ; $i++){
        $somma = $i + $somma;

    }
    return $somma;
}
echo test(),"<br>";


function controllo($ctrl){
     for($i = 1 ; $i <= $ctrl ; $i ++){
         if(($ctrl % $i) == 0){
             echo $i, "<br>";
         }
     }
}
controllo(30);
echo "<hr>";

function nome($nome){
    if($nome == "feffe"){
        return "ciao feffe";
    } else{
        return "non ti conosco $nome";
    }
}
echo nome("feffe"),"<br>";


function valori($num1 , $num2 , $num3){
    if($num1 > $num2){
        if($num1 > $num3){
            return "$num1 è il più grande <br>";
        } else {
            return "$num3 è il più grande <br>";
        }
    } else {
        if($num2 > $num3){
            return "$num2 è il più grande <br>";
        } else {
            return "$num3 è il più grande <br>";
        }
    }
}
echo valori(43, 44, 6);


function esponente($base , $esponente){
    $baseprovvisoria = 1;
    for($i = 1 ; $i <= $esponente ; $i ++){
        $baseprovvisoria = $baseprovvisoria * $base;
    }
    return "$baseprovvisoria <br>";
}
echo esponente(2,3);

?>