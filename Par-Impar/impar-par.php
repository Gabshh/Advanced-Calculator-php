<?php
    /*****************************************************
     * Objetivo: Identificar os números impares e pares 
     * entre os valores que o usúario escolher
     * Desenvolvedor: Gabriel Gomes
     * Data: 10/02/2022
     * Versão: 1.0 
    *****************************************************/

    //Declaração de variáveis
    $valor1 = (int) 0;
    $valor2 = (int) 0;
    $resultadoImpar = (int) null;
    $resultadoPar = (int) null;

    //Verificar se o botão foi clicado
    if (isset($_POST['buttonCalcular'])) {
        //Recebendo os dados do formulário
        $valor1 = $_POST['txtn1'];
        $valor2 = $_POST['txtn2'];
        
        for($contador = 0; $contador <= $valor2; $contador++){
            if ($contador % 2 == 0){
                $resultadoPar .= $contador. '<br/>';
            }else{
                $resultadoImpar .= $contador. '<br/>';
            }


        }   


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
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/synthwave.css">
    <title>Pares e Impares</title>
</head>
<body>
<div id="conteudo">
            <div id="titulo">
                ⠀⠀⠀Pares e Ímpares⠀⠀ ⠀
            </div>

            <div id="form">
                <form name="formRepeticao" method="post" action="impar-par.php">
                    <span>n° inicial:</span> <input type="text" name="txtn1" value=""> <br>
                    <span>⠀n°  final:</span> <input type="text" name="txtn2" value="">

                    <div id="container-button">
                            <input type="submit" name="buttonCalcular" value="Calcular">
                    </div>

                <div id="divisao-resultados">
                    <div id="secao-impar">Ímpares</div>
                    <div id="secao-par">Pares</div>
                </div>

                <div id="resultados">
                    <div id="resultado-impar"></div>
                    <div id="resultado-par"></div>
                </div>

                </form>

            </div>
            
        </div>

        
        <div id="menu-bar">
        <div id="menu" onclick="menuOnClick()">
            <div id="barra1" class="barra"></div>
            <div id="barra2" class="barra"></div>
            <div id="barra3" class="barra"></div>

        </div>
        <ul class="nav" id="nav">
            <li><a href="../Home/index.html">Home</a></li>
            <li><a href="../Calculadora/calculadora_simples.php">Calculadora</a></li>
            <li><a href="../Média/media.php">Média</a></li>
            <li><a href="#">Pares e Ímpares</a></li>
            <li><a href="../Tabuada/tabuada.php">Tabuada</a></li>
        </ul>

    </div>
    <div class="menu-burger" id="menu-burger"></div>
        
    <div class="overlay"></div>
    <div class="overlay glitch"></div>

    <script src="../js/script.js"></script>
    
</body>
</html>