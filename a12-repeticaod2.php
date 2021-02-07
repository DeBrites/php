<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repeição do While</title>
</head>
<body>
    <?php 
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o fatorial de $v</h1>"; //pega o valor aleatório e retorna o fatorial dele
        $n = $v;
        $fat = 1;
        do {
            $fat *= $n; //multiplicacao
            $n--;
        } while($n>=1);
        echo "<h2>$v! = $fat</h2>";

        $u = isset($_GET["tab"])?$_GET["tab"]:0;
        $i = 0;
        echo "<h1>Tabuada de $u</h1>";
        do {
            echo "<p>$i x $u = ". ($i*$u). "</p>";
            $i ++;
        } while ($i<=10);
    ?>
    <p><a href="a12-repeticao1.php">Voltar</a></p>
</body>
</html>