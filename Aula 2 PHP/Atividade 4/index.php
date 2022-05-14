<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Sites</title>
</head>
<body>
    <h1>Data atual por extenso</h1>
    <?php
        $data=date('d/m/Y');
        $data=explode("/",$data);   
        switch($data[1]){
            case '01': 
                $data[1]='Janeiro';
            break;
            case '02': 
                $data[1]='Fevereiro';
            break;
            case '03': 
                $data[1]='Março';
            break;
            case '04': 
                $data[1]='Abril';
            break;
            case '05': 
                $data[1]='Maio';
            break;
            case '06': 
                $data[1]='Junho';
            break;
            case '07': 
                $data[1]='Julho';
            break;
            case '08': 
                $data[1]='Agosto';
            break;
            case '09': 
                $data[1]='Setembro';
            break;
            case '10': 
                $data[1]='Outubro';
            break;
            case '11': 
                $data[1]='Novembro';
            break;
            case '12': 
                $data[1]='Dezembro';
            break;
        }
        echo $data[0]." de ".$data[1]." de ".$data[2];
    ?>
</body>
</html>