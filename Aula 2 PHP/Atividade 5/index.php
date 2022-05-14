<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Sites</title>
</head>
<body>
    <h1>Números aleatórios</h1>
    <?php
        $tema5=tema5();
        for($i=0;$i<count($tema5);$i++){
            echo $tema5[$i]." ";
        }

        function tema5(){
            for($i=0; $i<=rand(1,10); $i++){
                $array[]=rand(1,10);
            }
            return $array;
        }
    ?>
</body>
</html>