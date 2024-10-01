<?php

    //test1: stampare un numero 3 volte incrementando ogni volta il suo valore di 5

    function test1($chicco){
        for($i=0;$i<3;$i++){
            echo ($chicco."<br>");
            $chicco = $chicco + 5;
        }
    }
    test1(5);


    //test2: fare un ciclo di 5 giri e stampare ogni volta il numero del giro moltiplicato X 5

    function test2(){
        for($i=1;$i<6;$i++){
          echo (($i*5)."<br>");
        }
    }
    test2();


    //test3: fare un ciclo di 10 giri, e controllare se il numero di giro è paro, stampa in ogni caso

    function test3(){
        for($i=1;$i<11;$i++){
            if($i%2==0){
                echo "$i è un numero paro <br>";
            }
            else{
                echo "$i è un numero dispari<br>";
            }
        }
    }
    test3();


    //test4: crea un array di n numeri e stampa la somma

    function test4(){
        $dati = array(3,9,6,2,8);
        $somma=0;
        for($i=0;$i<count($dati);$i++){
            $somma = $somma + $dati[$i];
        }
        return $somma;
    }
    echo test4()."<br>";


    //test 5: crea un array di n stringhe e controllare quante di loro contengono la lettera "o" stampare il numero di
    // quante di loro hanno la lettera o e il numero di quante non la hanno

    function test5(){
        $dati = array("ciao","pippo","cacca","lina","uno");
        $somma_o =0;
        $somma_altri = 0;
        for($i=0;$i<count($dati);$i++){
            if(strpos($dati[$i],"o")!==false){
                $somma_o = $somma_o + 1;
            } else {
                $somma_altri = $somma_altri + 1;
            }
        }
        echo $somma_o."<br>";
        echo $somma_altri."<br>";
    }
    test5();


    //test 6: creare un array di n numeri e controllare se sono > di 10, stampare per ogni numero maggiore di 10
    // il numero e la sua posizione nell'array

    function test6(){
        $dati = array(9,28,56,3,26,9,27,4);
        for($i=0;$i<count($dati);$i++){
            if($dati[$i]>10){
                echo $dati[$i]." che si trova nella posizione ".$i."<br>";
            } else {
                echo "non mi hai detto cosa stampare per i minori quindi stampo SIIIIIUUUUUUUM<br>";
            }
        }
    }
    test6();
?>