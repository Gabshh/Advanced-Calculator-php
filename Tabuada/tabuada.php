<?php
    /*****************************************************
     * Objetivo: Apresentar e calcular uma tabuada simples
      de escolha do usuário
     * esenvolvedor: Gabriel Gomes
    *  Data: 04/02/2022
    * Versão: 1.0
    *****************************************************/

    //Declaração de variáveis 
    $valor1 = (double) 0;
    $valor2 = (double) 0;
    $resultado = (double) 0;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">
            Tabuada
        </div>

        <div id="form">
            <form name="formTabuada" method="post" action="tabuada.php">
                Tabuada: <input type="text" name="txtn1" value="">
                Contador:<input type="text" name="txtn2" value="">

                        <input type="submit" name="buttonCalcular" value="Calcular">

                <div id="resultado">
                    resultado
                </div>

            </form>

        </div>


    </div>
    
</body>
</html>