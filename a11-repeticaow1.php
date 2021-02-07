<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição While</title>
</head>
<body>
    <form method="get" action="a11-repeticaow2.php">
    <?php 
        $n = 1;
        while ($n<=10) {
            echo $n. "<br>";
            $n ++;
        }
        echo "<br>"; //Aqui a variável $n está dando 11 pois é maior que 10 então ele segue o script
        while ($n>=1) {
            echo $n. "<br>";
            $n --;
        }
        echo "<br>"; //Aqui a varíavel é zero
        while ($n<=20) {
            echo $n. "<br>";
            $n += 2; //soma 2 em 2
        }
        echo "<br>";
        $c = 1;
        while ($c<=5) {
            echo "<br>Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' required/><br>";
            $c ++;
        }
    ?><br>
    <fieldset><legend>Cálculo de Números</legend>
    Inicio: <input type="number" name="ini" required>
    Fim: <input type="number" name="fim" required>
    Incremento: <select name="sel" id="inc">
    <?php
    $c = 1;
    while ($c<=5) {
        echo "<br><option value='$c'>$c</option><br>";
        $c ++;
    }
    ?>
    </select>
    </fieldset><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>