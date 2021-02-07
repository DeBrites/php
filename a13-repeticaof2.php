<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição For</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        echo "<h1>Tabuada de $n</h1>";
        for ($c=1; $c<=10; $c++) {
            echo "$n x $c = ". ($n*$c). "<br/>";// multiplicação é mostrada e o resultado é feito pela concatenação
        }
        
        echo "<br/><h1>Número Primo</h1>";
        $primo = $_GET["pri"];
        echo "<h2>Analisando o número $primo</h2>";
        $mu = 0;
        echo "Valores múltiplos: ";
        for ($c=1; $c<=$primo; $c++) {
            $res = $primo % $c;
            if ($res == 0) {
                echo "$c ";  
                $mu++;
            }
        }
        echo "<br/><br/>Total de múltiplos: $mu";
        if ($mu == 2) {
            echo "<h2>Resultado: $primo É NÚMERO PRIMO!</h2>";
        }
        else {
            echo "<h2>Resultado: $primo NÃO É NÚMERO PRIMO!</h2>";
        }
    ?>
    <a href="a13-repeticaof1.php">Voltar</a>
</body>
</html>