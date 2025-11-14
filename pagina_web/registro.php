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
        <h2 class="text-center fw-bold mb-3"> Registrarse </h2>
        <form class="p-5 pb-4 rounded" method="post" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Correo</label>
                <input name="correo_registro" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo@gmail.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_registro">
            </div>

            <?php
            include("validar.php");
            ?>

            <div class="form_input">
                <button name="boton_registro" type="submit" class="btn btn-primary fw-semibold w-100">Crear Cuenta</button>
            </div>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>