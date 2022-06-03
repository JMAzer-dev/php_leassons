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
        $num = 0;
        while(true){
            
            echo $num .'<br>';
            $num += 5;
            if($num > 50){
                break;
            };
        }
        echo '<hr>';
        $num2 = 1;
        while($num2 < 10){
            $num2++;
            if($num2 == 2 || $num2 == 6){
                continue;
            }
            echo $num2.'<br>';
        }
        echo '<hr>';
        $x = 1;
        do {
            $x++;
            echo $x . '<br>';
        }   while($x <= 9 );

    ?>
</body>
</html>