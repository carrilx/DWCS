<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function calcIva (float $base, int $impuesto){
            if(empty($impuesto)){
                $impuesto = 21;
            }
            $total = $base * $impuesto / 100;
            return $total;
        }
        echo calcIva(23.0, 21);
    ?>
</body>
</html>