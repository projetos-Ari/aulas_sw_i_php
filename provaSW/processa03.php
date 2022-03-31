<?php

$num1 = $_POST['num1'];

switch ($num1){
    case "1":
        echo "DOMINGO";
        break;
     case "2":
        echo "SEGUNDA";
        break;
     case "3":
        echo "TERÇA";
        break;
    case "4":
        echo "QUARTA";
        break;
    case "5":
        echo "QUINTA";
        break;
    case "6":
        echo "SEXTA";
        break;
    case "7":
        echo "SÁBADO";
        break;
     default:
        echo "NÃO ENCONTREI O NÚMERO EM MINHA BASE DE DADOS!";
        break;
}

?>