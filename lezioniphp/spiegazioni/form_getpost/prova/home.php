<?php
var_dump($_GET);
echo"<br>";
echo $_GET["Numero1"];
echo"<br>";
echo ($_GET["Numero1"]+$_GET["Numero2"]+$_GET["Numero3"]);
echo "<br>";
for($i=0;$i<count($_GET);$i++){
    $somma = 0;
    $somma = $somma + $_GET[$i];
}
echo $somma;
?>
