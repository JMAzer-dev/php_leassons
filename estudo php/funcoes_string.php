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
        $texto = 'Curso Completo de, PHP';

        echo $texto;
        echo '<hr>' ;
        echo strtolower($texto);
        echo '<hr/>';
        echo strtoupper($texto);
        echo '<hr/>';
        echo ucfirst($texto);
        echo '<hr/>';
        echo strlen($texto);
        echo '<hr/>';
        echo str_replace(',' , '.' , $texto);
        echo '<hr/>';
        echo str_replace('PHP' , 'javascript' , $texto);
        echo '<hr/>';
        echo substr($texto, 5,2);

    ?>
</body>
</html>