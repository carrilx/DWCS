<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function sumatorio(int $a, int $b, int $c, int $d, int $e){
            return array_sum(func_get_args());
        }
        echo sumatorio(0,1,2,3,4);
    ?>
</body>
</html>