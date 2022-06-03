<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 7.9;
       echo floor($num).'<hr/>'; //arredonda pra baixo
    $num2 = 7.1;
        echo ceil($num2).'<hr/>';   //arredonda pra cima
    $num3 = 7.4;
        echo round($num3).'<hr/>'; //arredonda mais próximo
        echo rand(1,10).'<hr/>';   // random number
        echo sqrt(10); // Raiz quadrada
    ?>
</body>
</html>