<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
    <main>
        <h2> Registrarse </h2>
        <form method="post" action="">
            <div class="form_input">
                <label>Ingresar Correo</label>
                <input type="text" name="correo_registro" placeholder="Ejemplo@gmail.com">
            </div>

            <div class="form_input">
                <label>Crear Contraseña</label>
                <input type="password" name="password_registro">
            </div>

            <?php 
            include("conexion.php");
            include("validar.php");
            ?>

            <div class="form_input">
                <button name="boton_registro" type="submit">Crear Cuenta</button>
            </div>
        </form>
    </main>
</body>
</html>