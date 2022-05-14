<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Sites</title>
</head>
<body>
    <h1>Números pares de 0 à 10</h1>
    <?php
        $indice = 0;
        for($i=0; $i<=10; $i++){
            if($i%2==0){
                $array[]=$i;
                echo $array[$indice]." ";
                $indice++;
            }
        }
    ?>
</body>
</html>