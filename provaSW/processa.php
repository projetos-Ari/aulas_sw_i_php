<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $ano = 2022;

    $soma = $ano - $idade;

    echo "<span style='color:red;'>Olá ".$nome.", pelos meus cálculos você tem ".$soma." anos de idade.</span>"


?>