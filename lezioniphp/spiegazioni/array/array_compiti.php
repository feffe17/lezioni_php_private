
<?php

    //es1: creare un array di 3 numeri, creare una funzione che li sommi
    //es2: creare un array di 5 numeri, se la somma è maggiore di 1000 inserire una 6a posizione all'inizio e fai
    //un var_dump
    //es3: creare un array di 3 stringhe sium e stampare la prima e la terza per poi aggiungerne una 4a alla fine
    //es4: creare un array di 3 stringhe e verificare se le stringhe contengono la lettera "a" o la lettera "o"
    // (da evidenziare in caso in cui le abbiano entrambe)
    //FORMATO RICHIESTO
    //Stringa 1 : 'aaa' - CONTIENE LA A
    //Stringa 2 : 'ciao' - CONTIENE SIA LA A CHE LA O
    //Stringa 3 : 'nrg' - NON CONTIENE NE LA A NE LA O


    $dati=array(6,8,3,20,994);
    $stringhe=array("sium","la borra","cagna");


    es1($dati);
    function es1($array){
        echo $array[0]+$array[1]+$array[2]."<br>";
    }


    es2($dati);
    function es2($laborraaa){
        if(($laborraaa[0]+$laborraaa[1]+$laborraaa[2]+$laborraaa[3]+$laborraaa[4])>1000){
            array_unshift($laborraaa,"siuuum");
            var_dump($laborraaa);
            echo "<br>";
        }
        else{
            var_dump($laborraaa);
            echo "<br>";
        }
    }


    es3($stringhe);
    function es3($lello){
        echo $lello[0]." ".$lello[2]."<br>";
        array_push($lello,"orcodio");
        var_dump($lello);
        echo "<br>";
    }


    es4($stringhe);
    function es4($check){
        if(strpos($check[0],"a")!==false){
            if(strpos($check[0],"o")!==false){
                echo "stringa 1: sium, contiene sia la A che la O <br> ";
            }
            else{
                echo "stringa 1: sium, contiene solo la lettera A<br>";
            }
        }
        else{
            if(strpos($check[0],"o")!==false){
                echo "stringa 1: sium, contiene solo la lettera O<br>";
            }
            else{
                echo "stringa 1: sium, non contiene ne la A ne la O<br>";
            }
        }

        if(strpos($check[1],"a")!==false){
            if(strpos($check[1],"o")!==false){
                echo "stringa 2: la borra, contiene sia la A che la O <br> ";
            }
            else{
                echo "stringa 2: la borra, contiene solo la lettera A<br>";
            }
        }
        else{
            if(strpos($check[1],"o")!==false){
                echo "stringa 2: la borra, contiene solo la lettera O<br>";
            }
            else{
                echo "stringa 2: la borra, non contiene ne la A ne la O<br>";
            }
        }

        if(strpos($check[2],"a")!==false){
            if(strpos($check[2],"o")!==false){
                echo "stringa 3: cagna, contiene sia la A che la O <br> ";
            }
            else{
                echo "stringa 3: cagna, contiene solo la lettera A<br>";
            }
        }
        else{
            if(strpos($check[2],"o")!==false){
                echo "stringa 3: cagna, contiene solo la lettera O<br>";
            }
            else{
                echo "stringa 3: cagna, non contiene ne la A ne la O<br>";
            }
        }
    }


    //es5: controllare se un numero è diverso da 5 e 15, usare le porte logiche

    function es5($controlla){
        if($controlla != 5 && $controlla != 15){
            echo "si, è diverso<br>";
        }
        else{
            echo "no, non lo è<br>";
        }
    }
    es5(6);


    //es 6: controllare se un numero è uguale a 10, 20 o 30, se lo è controlla se è un multiplo di 10 e se lo è
    //stampa il numero. In tutti gli altri casi stampa 25.5

    function es6($lol){
        if($lol == 10 || $lol == 20 || $lol == 30){
            if(($lol % 10) == 0){
                echo $lol."<br>";
            }
            else{
                echo (25.5)."<br>";
            }
        }
        else{
            echo (25.5)."<br>";
        }
    }
    es6(30);
?>
