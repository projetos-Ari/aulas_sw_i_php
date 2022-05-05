<?php  
    $numero = $_POST['num'];
    //echo $numero;
    
    for($cont=1;$cont<=10;$cont++){
        $result = $numero * $cont;
        echo "$numero * $cont = $result <br>";
    }

?>