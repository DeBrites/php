<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição For</title>
</head>
<body>
    <?php 
        for ($c=1;$c<=10;$c++) { //estrutura for, parecida com o while, primeiro declara a variavel, depois da a condição para terminar o ciclo e então termina com o incremento do loop
            echo "$c "; //vai contar de 1 até 10
        }
    ?>
    <form action="a13-repeticaof2.php" method="get">
        <br/>Valor da tabuada: <select name="num" id="numer">
            <?php 
                for ($c=1; $c<=10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <br/><br/><br/>
        Número Primo: <input type="number" name="pri" min="1" required/>
        <input type="submit" value="Enviar"/>
    </form>

</body>
</html>