<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        /*
            O valor true = 1
            o valor false = nulo/zero/vazio
        */
        print "<h1>Teste</h1>";
        $num = 300;
        echo "O valor da variável é $num <br>";
        
        $v = 300;
        var_dump($v);

        $num2 = (int) 3.5;
        echo "<br> $num2 ";
        var_dump($num2);
        
        $casado = false;
        var_dump($casado);
        
        $vet = [0, 6, 2, 9, 3];
        var_dump($vet);
        
        class Pessoa{
            private string $nome;

        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>