<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
</head>
<body>
    <?php
        function teste($x) { 
            $x += 2;
            echo "<p>O valor de x é $x.</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de a é $a</p><br/>";

        function tese (&$y) {//chamada por referencia &$x com & na frente de uma variável $y
            $y += 6;
            echo "<p>O valor de y é $y</p>";
        }
        $b = 4;
        tese($b); //b é referencia para o y
        echo "<p>O valor de a é $b.</p>"; //b passa a ter o valor de y
        include "a15-funcao.php"; //include é um arquivo em php onde se pode criar funções independentes
        echo "<h1>Testando novas funções</h1>";
        ola(); //retorna a função do arquivo em php
        mostravalor(5);
        //existem comandos como include (incluir) que fica procurando o arquivo e continua processando o site, required(requerir) que procura o arquivo e se não achar ele para de processar o site
        //existem tambem o include_once e o required_once que faz o programa carregar uma única vez não precisando recarregar caso chamar de novo a função
    ?>
</body>
</html>