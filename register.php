<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        usuario: <input type="text" name="usuario" value="<?php if (isset($usuario)) {
                                                                echo $usuario;
                                                            } ?>">
        email: <input type="text" name="email">
        clave: <input type="password" name="clave">


        <input type="submit" name="Enviar">
    </form>
</body>

</html>