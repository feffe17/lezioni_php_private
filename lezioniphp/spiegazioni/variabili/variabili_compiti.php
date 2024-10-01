<?php
    //es 1: Il programma legge due numeri e controlla se il primo è maggiore del secondo.

    function ese1($n, $no){
        if($n > $no){
            echo ($n);
        }
        else{
            echo ($no."<br>");
        }
    }
    ese1(4,6);


    //es 2: L’utente inserisce la propria età e
    // il programma dice se è maggiorenne (ovvero con età maggiore uguale a 18 anni)

    function ese2($x){
        if($x > 18){
            return "maggiorenne<br>";
        }
        else{
            return "stupido regazzino<br>";
        }
    }
    echo ese2(17);


    //es 3: L’utente inserisce a quanti anni si può prendere la patente nello stato
    // in cui si vive (in Italia a 18 anni ma in altri stati a 16, 17 o a 21),
    //l’utente inserisce quanti anni ha;
    //il programma risponde se l’utente può prendere la patente.

    function ese3($etaminima, $eta){
        if($eta<$etaminima){
            echo "va a fette regazzino<br>";
        }
        else{
            echo "puoi prendere la patente<br>";
        }
    }
    ese3(21,22);


    //es 4: Il programma legge due numeri e controlla se il primo è multiplo del secondo.

    function ese4($multiplo, $nprimo){
        $change= $multiplo % $nprimo;
        if($change!=0){
            return "non è numero primo!<br>";
        }
        else{
            return "è numero primo!<br>";
        }
    }
    echo ese4(36,6);


    //es 5: L’utente inserisce una temperatura in Celsius e il calcolatore la converte in Fahrenheit ed in Kelvin.
    // Se la temperatura inserita è minore dello zero assoluto (-273,15), il calcolatore segnala un errore.
    //Si ricordi che:
    //Fahrenheit = (9/5) · Celsius + 32 
    //Kelvin = Celsius + 273,15

    function ese5($gradi){
        if($gradi>-273.15){
            return "Fahrenheit:".(($gradi*9)/5+32)."<br>kelvin:".($gradi+273.15)."<br>";
        }
        else{
            return "*errore 0 assoluto*<br>";
        }
    }
    echo ese5(30);


    //es 7: L’utente inserisce un anno ed il calcolatore verifica se l’anno inserito è bisestile.
    //Un anno è bisestile se è divisibile per 4 ma non per 100, oppure se è divisibile per 400
    // (ad esempio il 1900 non è stato bisestile, mentre il 2000 lo è stato).

    function ese7($anno){
        if($anno%400==0){
            echo "anno bislungo<br>";
        }
        else{
            if($anno%4==0){
                if($anno%100!=0){
                    echo "anno bislungo<br>";
                }else{
                    echo "anno non bislungo<br>";
                }
            }else{
                echo "anno non bislungo<br>";
            }
        }
    }
    ese7(1908);


    //Il programma legge tre numeri e dice se possono essere
    // le lunghezze dei lati di un triangolo (perché un triangolo possa essere tale
    // la somma di ogni coppia lati deve essere maggiore dell’altro)

    function ese8($l1,$l2,$l3){
        if(($l1+$l2)>$l3){
            if(($l2+$l3)>$l1){
                if(($l3+$l1)>$l2){
                    echo "possono essere i lati di un triangolo<br>";
                }
                else{
                    echo "non possono essere i lati di un triangolo<br>";
                }
            }
            else{
                echo "non possono essere i lati di un triangolo<br>";
            }
        }
        else{
            echo "non possono essere i lati di un triangolo brrrrrr<br>";
        }
    }
    ese8(3,4,100);


    //Il programma legge tre lunghezze
    // dei lati di un triangolo e dice se il triangolo è scaleno, isoscele o equilatero
    //(Nota bene, dice solo la tipologia più particolare, ovvero se è equilatero, dice
    // solo che è equilatero e non anche che è isoscele)

    function ese9($a1,$a2,$a3){
        if($a1==$a2){
            if($a2==$a3){
                return "equilatero<br>";
            }
            else{
                if($a1==$a3){
                    return "equilatero<br>";
                }
                else{
                    return "isoscele<br>";
                }
            }
        }
        else{
            if($a1==$a3){
                return "isoscele<br>";
            }
            else{
                if($a2==$a3){
                    return "isoscele<br>";
                }
                else{
                    return "scaleno<br>";
                }
            }
        }
    }
    echo ese9(3,4,5);


    //La prima volta che l’uomo è andato sulla Luna è stato il 1969, creare un programma
    // che chiede l’anno di nascita all’utente e \gli risponde se è nato l’anno in cui l’uomo
    // è andato sulla Luna o quanti anni prima o quanti anni dopo.

    function ese10($annodinascita){
        if($annodinascita>1969){
            return "sei nato ".($annodinascita-1969)." anni dopo l'allunaggio<br>";
        }
        else{
            if($annodinascita==1969){
                return "sei Neil Armstrong<br>";
            }
            else{
                return "sei nato ".(1969-$annodinascita)." anni prima dell'allunaggio<br>";
            }
        }
    }
    echo ese10(1997);


    //Il programma legge tre numeri e li mette in ordine crescente.

    function ese11($n1,$n2,$n3){
        if($n1>$n2){
            if($n2>$n3){
                return $n1 .">". floor($n2) .">". $n3 ."<br>";
            }
            else{
                if($n1>$n3){
                    return "$n1>$n3>$n2<br>";
                }
                else{
                    return "$n3>$n1>$n2<br>";
                }
            }
        }
        else{
            if($n1>$n3){
                return "$n2>$n1>$n3<br>";
            }
            else{
                if($n2>$n3){
                    return "$n2>$n3>$n1<br>";
                }
                else{
                    return "$n3>$n2>$n1<br>";
                }
            }
        }
    }
    echo ese11(100,20,2015);


    //Inseriti tre numeri A, B e C dire se B è compreso tra A e C.

    function ese12($a,$b,$c){
        if($b>$a){
            if($b<$c){
                return "$b è compreso tra $a e $c<br>";
            }
            else{
                return "$b non è compreso tra $a e $c<br>";
            }
        }
        else{
            if($b>$c){
                return "$b è compreso tra $c e $a<br>";
            }
            else{
                return "$b non è compreso tra $c e $a<br>";
            }
        }
    }
    echo ese12(10,3,2);


    //ese 13: Leggere un carattere e dire se è una vocale

    function ese13($lettera){
        $vocali=array("a","e","i","o","u");
        if(in_array($lettera,$vocali)){
            echo "vocale";
        }
        else{
            echo "consonante";
        }
    }
    echo ese13("f");

    //es 15: Fare un programma che legge i coefficienti a,b,c di un’equazione
    // di secondo grado e ne calcola le soluzioni, quando possibile.

    function ese15($a,$b,$c){
        
    }
?>
