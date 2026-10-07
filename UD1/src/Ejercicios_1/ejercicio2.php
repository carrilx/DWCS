<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function login(String $user, String $password){
            if(empty($user)||empty($password)){
                return "Campos vacíos";
            }
            if($user == "Admin" && $password == "1234"){
                return "Usuario y contraseña correctas";
            }
            if($user != "Admin" || $password != "1234"){
                return "Usuario o contraseña incorrecta";
            }
        }

        echo login("Admin", "1234");
    ?>
</body>
</html>