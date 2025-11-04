<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <main>
        <h2 class="text-center"> Iniciar sesion </h2>
        <form method="post" action="">
            <div class="form_input">
                <label>Correo</label>
                <input type="text" name="correo" placeholder="Ejemplo@gmail.com">
            </div>

            <div class="form_input">
                <label>Contraseña</label>
                <input type="password" name="password">
            </div>

            <?php 
            include("conexion.php");
            include("validar.php");
            ?>

            <div class="form_input">
                <button name="boton" type="submit">Continuar</button>
            </div>
            
            <div class="form_input registro">
                <p>No tienes una cuenta? <a href="registro.php">Registrate</a></p>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>