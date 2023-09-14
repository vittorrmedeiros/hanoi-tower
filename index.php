<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torre de Hanói</title>
</head>

<body>

    <form method="POST">
        <label for="n">Número de discos</label> <br>
        <input type="number" name="n">
        <input type="submit" value="Enviar"> <br><br>
    </form>

    <?php

    if ($_POST) {
        $n = $_POST['n'];
        $disco = $_POST['n'];
        $equacao = (2 ** $disco) - 1;
        echo "O mínimo de movimentos possíveis é: $equacao <br><br>";
        hanoi($n, 'A', 'C', 'B');
    }

    function hanoi($n, $de, $para, $aux)
    {
        if ($n == 1) {
            echo "Mova o disco 1 de $de para $para <br>";
            return;
        }
        hanoi($n - 1, $de, $aux, $para);
        echo "Mova o disco $n de $de para $para <br>";
        hanoi($n - 1, $aux, $para, $de);
    }

    ?>
    
</body>
</html>