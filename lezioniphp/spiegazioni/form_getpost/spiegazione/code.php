<?php

//POSSIBILITA DI STAMPARE IL RISULTATO IL $_POST, DA VALORI PASSATI VIA FORM
    var_dump($_POST);
    echo "<br>".$_POST['Valore1'];
    echo "<hr>";


//SOMMARE DUE NUMERI IN INPUT
    var_dump($_POST);
    echo "<br>";
    echo $_POST['Numero1'] + $_POST['Numero2'];
    echo "<hr>";

//CICLARE N VOLTE UNA STAMPA FISSA
    for($i=0;$i<$_POST['Numero1'];$i++){
        echo ($i+1).". Giro<br>";
    }
    echo "<hr>";

//PROVA DI LOGIN
    if($_POST['Pass']=='pippo'){
        echo "Benvenuto ".$_POST['User'];
    } else {
        echo "Non so chi sei";
    }

?>