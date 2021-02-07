<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
        <p>Maior ></p>
        <p>Menor <</p>
        <p>Maior ou igual</p>
        <p>Menor ou igual</p>
        <p>Diferente</p>
        <p>Igual</p>
    <h2>Operador Ternário</h2>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2</br/>";
        $r = ($tipo =="s")?$n1+$n2:$n1*$n2; //na condição, se for verdade ele soma, se nao, ele multiplica
        echo "O resultado do tipo é $r<br/>";
        $a = 3;
        $b = "3";
        $e = ($a == $b)?"SIM":"NÃO"; //Ele testa se os valores são iguais sem perceber o tipo
        echo "Os valores são $a e $b, eles são iguais? $e.<br/>";
        $e = ($a === $b)?"SIM":"NÃO";
        echo "Os valores $a e $b são idênticos? $e.<br/>"; //Ele testa se os tipos são o mesmo
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $m = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é $m.<br/>";
        echo "A situação do aluno é de ". (($m<6)?"REPROVADO":"APROVADO"); //Tem que colocar parênteses na expressão para que funcione concatenado
    ?>
    <h2>Operadores Lógicos</h2>
    <?php 
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano, tem $idade anos de idade.<br/>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO"; // Operador lógico AND por &&, outros sao OU por || e  OU EXCLUSIVO por xor e NÃO por !
        echo "E dessa forma seu voto é $tipo.";
    ?>
</body>
</html>