<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição do While</title>
</head>
<body>
    <?php 
        $c = 1;
        do {
            echo "$c ";
            $c ++;
        } while($c<=10); //contador até 10
        echo "<br>O valor ficou $c<br>";
        do {
            echo "$c ";
            $c --;
        } while ($c>1); //while aparece no final e funciona da mesma maneira
        echo "<br>";
    ?>
    <form method="get" action="a12-repeticao2.php">
        Valor Aleatório: <input type="number" name="val" min="0" max="100"/>
        <h1>Tabuada</h1>
        <select name="tab" id="tabuada">
        <?php
        $c = 1;
        do {
        echo "<option value='$c'>$c</option>";
        $c ++;
        } while ($c<=10);
        ?>
        </select>
        <input type="submit" value="Calcular"/>
    </form>
</body>
</html>