<?php
$meses = ["janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"];
//echo $meses[3];

$mes = "6";
switch ($mes){
    case "1":
        echo $meses[0];
        break;
    case "2":
        echo $meses[1];
        break;
    case "3":
        echo $meses[2];
        break;
    case "4":
        echo $meses[3];
        break;
    case "5":
        echo $meses[4];
        break;
    case "6":
        echo $meses[5];
        break;
    case "7":
        echo $meses[6];
        break;
    case "8":
        echo $meses[7];
        break;
    case "9":
        echo $meses[8];
        break;
    case "10":
        echo $meses[9];
        break;
    case "11":
        echo $meses[10];
        break;
    case "12":
        echo $meses[11];
        break;
     default:
        echo "NaNaNa";
        break;
}

?>