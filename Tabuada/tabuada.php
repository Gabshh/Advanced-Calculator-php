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
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="../css/synthwave.css">
        <title>Tabuada</title>
    </head>
    <body>
        <div id="conteudo">
            <div id="titulo">
                ⠀⠀⠀⠀⠀⠀Tabuada⠀⠀⠀⠀⠀⠀ ⠀
            </div>

            <div id="form">
                <form name="formTabuada" method="post" action="tabuada.php">
                    Tabuada: <input type="text" name="txtn1" value=""> <br>
                    Contador:<input type="text" name="txtn2" value="">

                    <div id="container-button">
                            <input type="submit" name="buttonCalcular" value="Calcular">
                    </div>

                    <div id="resultado">
                        resultado
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
            <li><a href="../Par-Impar/impar-par.php">Pares e Ímpares</a></li>
            <li><a href="#">Tabuada</a></li>
        </ul>

    </div>
    <div class="menu-burger" id="menu-burger"></div>
        
    <div class="overlay"></div>
    <div class="overlay glitch"></div>

    <script src="../js/script.js"></script>
    </body>
</html>