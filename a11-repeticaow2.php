<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição While</title>
</head>
<body>
    <?php
        $i = 1; //variável índice que vai até 5
        while ($i<=5) { //quando for 6 o while não processa mais
            $v = "num". $i; //cria num1, num2...
            $url = "v". $i;//pega o valor 1, 2... digitado
            $$v = isset($_GET["$url"])?$_GET["$url"]:0; //transforma num1, num2... em variáveis, num1 passa a carregar o valor 1
            $i ++;
        }
        echo "$num1 $num2 $num3 $num4 $num5 <br>";
        $i = 1;
        while ($i<=5) {
            $v = "num". $i; //transforma $v um num1
            echo "Valor $i: ". $$v. "<br/>"; //ele pega $v que é num1 e chama a variável $num1 que possui o valor digitado
            $i ++;
        }
    ?><br>
    <?php 
        $ini = isset($_GET["ini"])?$_GET["ini"]:0;
        $fim = isset($_GET["fim"])?$_GET["fim"]:0;
        $inc = isset($_GET["sel"])?$_GET["sel"]: 1;
        echo "O incremeto escolhido foi $inc <br>";
        switch ($inc) {
            case 1:
                $inc = 1;
                break;
            case 2:
                $inc = 2;
                break;
            case 3:
                $inc = 3;
                break;
            case 4:
                $inc = 4;
                break;
            case 5:
                $inc = 5;
                break;
            default:
                echo "Error";
        }
        if ($ini < $fim) {
            while ($ini <= $fim) {
                $ini += $inc;
                if ($ini <=  $fim) {
                    echo "$ini ";
                }
            }
        }
        elseif ($ini > $fim) {
            while ($ini >= $fim) {
                $ini -= $inc;
                if ($ini >=  $fim) {
                    echo "$ini ";
                }
            }
        }
        else {
            echo "$ini ";
        }
    ?>
    <a href="a11-repeticaow1.php">Voltar</a>
</body>
</html>