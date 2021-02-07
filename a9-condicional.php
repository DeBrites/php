<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If</title>
    <?php 
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        echo "Você  nasceu em $ano e tem $idade anos.";
        if ($idade>=18) { //deve se colocar a expressão entre parenteses
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        } 
        echo "<br>Com essa idade você $v e também $d.<br>";
        echo "<h2>Voto com condição aninhada</h2>";

        if ($idade<16) { //deve se colocar a expressão entre parenteses
            $v = "não vota"; //não esqueça do ponto e vírgula
        }
        else {
            if ($idade >=16 && $idade < 18 || $idade>65){ //condição aninhada onde tem if dentro de else, foi utilizado && and e || ou.
                $v = "voto opcional";
            }
            else {
                $v = "voto obrigatório";
            }
        } 
            //e outra opção é fazer 
            /*
            if () {
                código
            }
            elseif () {
                código
            } 
            else {
                e mais código
            }
            */
        echo "Para esta idade, $v!<br><br>";
        echo "<h2>Nota Final!</h2>";
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $media = ($n1 + $n2) / 2;
        echo "Sua primeira nota foi <span>$n1</span>, e sua segunda nota foi <span>$n2</span>.<br>";
        if ($media < 5) {
            $final = "REPROVADO";
            $cor = "#FF0000";
        }
        elseif ($media >= 5 && $media < 7) {
            $final = "RECUPERAÇÃO";
            $cor = "#FFFF00";
        }
        else {
            $final = "APROVADO";
            $cor = "#008000";
        }
        echo "<br>Com a sua média de <span>$media</span>, você está <span>$final</span>!";
    ?>
    <style>
        span {
            font-weight: bold;
            color: <?php echo "$cor"; ?>;
        }
        a {
            padding: 5px;
            background-color: gray;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            color: <?php echo "$cor"; ?>;
            background-color: white;
            transition: 0.8s;
        }
    </style>
</head>
<body>
    <br><br>
    <a href="a9-condicional.html">Voltar</a>
</body>
</html>