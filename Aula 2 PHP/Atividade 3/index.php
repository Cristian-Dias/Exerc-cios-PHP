<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Sites</title>
</head>
<body>
    <h1>Números ímpares divisiveis por 7</h1>
    <?php
        $tema2=tema2(5,30);
        for($i=0;$i<count($tema2);$i++){
            echo $tema2[$i]." ";
        }
        function tema2($a,$b){
            for($i=$a; $i<=$b; $i++){
                if($i%2!=0 and $i%7==0){
                    $array[]=$i;
                }
            }
            return $array;
        }
    ?>
</body>
</html>