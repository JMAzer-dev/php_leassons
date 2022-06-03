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

    function imposto($sal){
        $ali = '';
        if($sal <= 1903.98){
            
            return 'isento';
        } else if($sal > 1903.98 && $sal < 2826.66){
            $ali = 0.075;
        } else if($sal >= 2826.66 && $sal < 3751.06){
            $ali = 0.15;
        } else if($sal >= 3751.06 && $sal < 4663.69){
            $ali = 0.225;
        } else {
            $ali = 0.275;
        }  
        return $sal * $ali;
    }       
    echo imposto(4663.69);
    ?>
</body>
</html>