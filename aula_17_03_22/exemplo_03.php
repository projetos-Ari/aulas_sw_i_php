<?php
    $idade = 18;
    $habilitacao = TRUE;

    //APROVADO SE IDADE FOR MAIOR QUE 18
    //REPROVADO SE IDADE FOR MENOR QUE 18

    //APROVADO SE HABILITAÇÃO FOR TRUE
    //REPROVADO SE HABILITAÇÃO FOR FALSE

    echo "Sua idade é: $idade <br>";
    echo "Tem habilitação: $habilitacao <br>";
    echo "<br>";

    if (($idade>17.9) and ($habilitacao == TRUE)){
        echo "APROVADO PARA DIRIGIR";
    }

    else {
        echo "REPROVADO PARA DIRIGIR";
    } 
 

?>