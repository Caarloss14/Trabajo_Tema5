<?php
// Incluir el archivo con las clases Empleado, Gerente y Vendedor
include 'Empleado.php';

$resultado_salario = "";

// Verificar si se ha enviado el formulario (simulado por el botón "Mostrar datos")
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegurarse de que todos los campos necesarios estén presentes
    if (isset($_POST["nombre"], $_POST["apellido"], $_POST["salariobase"], $_POST["posicion"])) {
        
        $nombre = htmlspecialchars($_POST["nombre"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        // Convertir el salario base a float
        $salario_base = (float)$_POST["salariobase"];
        $posicion = $_POST["posicion"];

        // Validar que el salario base sea un número
        if (!is_numeric($salario_base) || $salario_base < 0) {
            $resultado_salario = '<div class="alert alert-danger" role="alert">El salario base debe ser un número positivo.</div>';
        } else {
            // Crear el objeto de la clase correspondiente (Gerente o Vendedor)
            if ($posicion == "Gerente") {
                $empleado = new Gerente($nombre, $apellido, $salario_base);
            } elseif ($posicion == "Vendedor") {
                // Para Vendedor, el constructor asigna una comisión aleatoria.
                $empleado = new Vendedor($nombre, $apellido, $salario_base);
            } else {
                $resultado_salario = '<div class="alert alert-warning" role="alert">Posición no válida.</div>';
            }

            // Si se creó un objeto Empleado válido
            if (isset($empleado)) {
                $salario_final = $empleado->calcularSalario();
                
                // Generar el mensaje de resultado
                $mensaje = "El salario final para **$nombre $apellido** ($posicion) es de **" . number_format($salario_final, 2) . "€**";
                
                if ($posicion == "Gerente") {
                    $mensaje .= " (Salario Base + Bono del {$empleado->bono}%)";
                } elseif ($posicion == "Vendedor") {
                    // Si es Vendedor, el cálculo es con la comisión generada aleatoriamente
                    $mensaje .= " (Salario Base + Comisión del {$empleado->comision}%)";
                }

                $resultado_salario = '<div class="alert alert-success mt-4" role="alert">' . $mensaje . '</div>';
            }
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // En caso de que falte algún campo
         $resultado_salario = '<div class="alert alert-danger" role="alert">Debe completar todos los campos.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formmulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="estiloformulario.css" rel="stylesheet">
</head>
<body>
    <h1>Formulario de Datos</h1>
    
    <form method="POST" action="formulario.php">
        <div class="mb-3 text-center">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3 text-center">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" required>
        </div>

        <div class="mb-3 text-center">
            <label for="salariobase" class="form-label">Salario base:</label>
            <input type="number" step="any" id="salariobase" name="salariobase" class="form-control" required>
        </div>
        <div class="mb-3 text-center">

        <label class="form-label d-block">Posición:</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="posicion" id="gerente" value="Gerente" required>
                <label class="form-check-label" for="gerente">Gerente</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="posicion" id="vendedor" value="Vendedor">
                <label class="form-check-label" for="vendedor">Vendedor</label>
            </div>
        </div>
        <div class="d-grid gap-2 col-8 mx-auto">
            <button class="btn btn-custom" type="submit">Mostrar datos</button>
        </div>
    </form>
    
    <?php
    // Mostrar el resultado del cálculo del salario aquí
    echo $resultado_salario;
    ?>

</body>
</html>