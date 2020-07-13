   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Sesiones</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="login">
        <form class="form" action="control.php" method="POST">
            <h2>Iniciar sesión</h2>
            <p>Carnet de Identidad: <br>
            <input required type="text" name="carnet"></p>
            <p>Password: <br>
            <input required type="password" name="password"></p>
            <input type="submit" class="enviar" name="enviar" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>