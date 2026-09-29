<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function volumenCilin(float $radio, float $altura){
            $volumen =  pi() * $radio * $radio * $altura;
            return $volumen;
        }

        echo volumenCilin(21.2, 23.0)
    ?>
</body>
</html>