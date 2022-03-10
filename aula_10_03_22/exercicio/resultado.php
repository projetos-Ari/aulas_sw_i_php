<?php

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $soma = $nota1 + $nota2 + $nota3;

    echo "Olá ".$nome.", sua média é igual a ".$soma;


?>