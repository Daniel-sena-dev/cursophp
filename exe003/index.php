<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Variaveis em PHP 8</h1>
    <?php 
        $nome = "Daniel"; //Atribuição de uma variavel
        $numero = 2;
        $numeroFlutuante = 3.2;
        $booleano = True;
        const PAIS = "Brasil"; //Definição de constante

        echo "<p>$nome</p>";
        echo "<p>$numero</p>";
        echo "<p>$numeroFlutuante</p>";
        echo "<p>$booleano</p>";
        $soma = $numero + $numeroFlutuante;
        echo ($soma) . "<br>";
        echo PAIS . "<br>";
        echo $numero - $numeroFlutuante . "<br>";
        echo $numero / $numeroFlutuante . "<br>";
        echo $numero * $numeroFlutuante . "<br>";
        echo $numero ** $numeroFlutuante . "<br>";

    ?>
</body>
</html>