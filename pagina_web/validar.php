<?php
//envio de datos y verificar que los campos no esten vacios
if (isset($_POST["boton"])) {
    if (empty($_POST["correo"]) || empty($_POST["password"])) {
        echo '<div class="form_input"><p>Los campos están vacíos</p></div>';
    } else {
        //pasamos a guardar los inputs en variables
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        //consulta en la base de datos de mysql
        $sql = $conexion->query("SELECT * FROM users WHERE email='$correo' AND password='$password'");

        //Si la consulta es true, se ingresara a la pagina, si no mandara un echo
        if ($datos = $sql->fetch_object()) {
            header("Location: formulario.php");
            exit();
        }else {
            echo '<div class="form_input">Correo o contraseña incorrecta</div>';
        }
    }
}

if (isset($_POST["boton_registro"])) {
    if (empty($_POST["correo_registro"]) || empty($_POST["password_registro"])) {
        echo '<div class="form_input"><p>Los campos están vacíos</p></div>';
    } else {
        //pasamos a guardar los inputs en variables
        $correo = $_POST["correo_registro"];
        $password = $_POST["password_registro"];

        $sql_verificacion = $conexion->query("SELECT * FROM users WHERE email='$correo'");

        //Si el numero de datos que nos devuelve la consulta es 0
        if($sql_verificacion->num_rows > 0) {
            echo '<div class="form_input"><p>Este correo ya fue registrado</p></div>';
        } else {
            //consulta en la base de datos de mysql
            $sql = $conexion->query("INSERT INTO users (email, password) VALUES ('$correo','$password')");
            //Si la consulta es true, se ingresara a la pagina, si no mandara un echo
        if ($sql) {
            header("Location: formulario.php");
            exit();
        }else {
                echo '<div class="form_input"><p>Hubo un problema con el registro</p></div>';
        }
        }
    }
}


?>
