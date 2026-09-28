<?php 
        function reverso(int $numero): int {
            $enString = strval($numero);
            $reverso = strrev($enString);
            return intval($reverso);
        }
        $numero = 987;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El reverso de <? $numero ?> es <? reverso($numero)?></h1>
</body>
</html>