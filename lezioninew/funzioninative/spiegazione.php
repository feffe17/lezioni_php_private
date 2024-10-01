<?php
    //COME CHIAMARE LE FUNZIONI
    function testFunction($valore){
        $val2 = 3;

        return (testFunction2($valore))+(testFunction3($val2));
    }

    function testFunction2($carlo){
        $carlo = $carlo+3;
        return $carlo;
    }

    function testFunction3($val2){
        $val2 = $val2+7;
        return $val2;
    }

    echo testFunction(10),"<br>";


    function longpsw($lun){
        return strlen($lun);
    }
    function psw($pswd){
        if(longpsw($pswd) < 8){
            return "Inserire una password di almeno 8 caratteri <br>";
        }else{
            return "password valida <br>";
        }
    }
    echo psw("federicoooo")
?>