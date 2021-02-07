<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch</title>
</head>
<body>
    <?php 
       $n = isset($_GET["num"])?$_GET["num"]:0; //com o valor zero caso não digite
       $o = isset($_GET["oper"])?$_GET["oper"]:1; //definido o value 1 no formulário para não dar erro
       switch ($o) { //a expressão se coloca entre parenteses
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n,3); //elevado ao cubo
                break;
            case 3:
                $r = sqrt($n); // raiz quadrada
                break; //Break sai do Switch pulando as outras opções
            default:
                echo "ERROR"; //Para quando os casos não funcionarem
       }
       echo "O resultado da operação solicitada foi <b>$r</b><br>";
       $d = isset($_GET["dia"])?$_GET["dia"]:0;
       switch ($d) {
            case 2: //infelizmente no php não é possivel deixar case 2, 3, 4, 5, 6:
            case 3: // nao precisa ser somente número pode ser palavra entre aspas
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar!";
                break;
            case 7:
            case 1:
                echo "Vá descansar!";
                break;
            default:
                echo "Dia da semana inválido";
       }
       echo "<br>";
       $estado = isset($_GET["est"])?$_GET["est"]:0;
       switch ($estado) {
            case "1": //exemplo com string
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                $r = "Região Norte";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 20:
            case 26:
                $r = "Região Nordeste";
                break;
            case 7:
            case 9:
            case 11:
            case 12:
                $r = "Região Centro-Oeste";
                break;
            case 8:
            case 13:
            case 19:
            case 25:
                $r = "Região Sudeste";
                break;
            case 16:
            case 21:
            case 24:
                $r = "Região Sul";
                break;
            default:
                $r = "Error";
       }
       echo "Você escolheu <b>$r</b>!"
    ?>
    <br>
    <a href="a10-condicionals.html">Voltar</a>
</body>
</html>