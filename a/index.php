<?php

    $valor = (int) 0;
    $contador = (int) 0;
    $resultado = (string) null;

    if (isset($_POST['btnCalc'])) {

        $valor = $_POST['txtNumero'];
        
        /*Exemplo utilizando WHILE
            while($contador <= $valor) {
                echo($contador. '<br>');
                //$contador = $contador + 1 OU $contador+=1;
                $contador++;
        }*/

        for($contador = 0; $contador <= $valor; $contador++)
            //echo($contador. '<br>'); OU $resultado = $resultado . $contador.'br';
            $resultado.= $contador.'<br>';
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sei nao man</title>
</head>
<body>
    <form name="formRepeticao" method="post" action="index.php"> 
        Digite um número: <input type="text" name="txtNumero">
        <input type="submit" name="btnCalc" value="Calcular">
    </form>

    <div>
        <?=$resultado?>
    </div>
    
</body>
</html>