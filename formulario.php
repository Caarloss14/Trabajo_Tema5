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

    <form>
        <div class="mb-3 text-center">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" class="form-control">
        </div>

        <div class="mb-3 text-center">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" id="apellido" class="form-control">
        </div>

        <div class="mb-3 text-center">
            <label for="salariobase" class="form-label">Salario base:</label>
            <input type="text" id="salariobase" class="form-control">
        </div>
        <div class="mb-3 text-center">

        <label class="form-label d-block">Posición:</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="posicion" id="gerente" value="Gerente">
                <label class="form-check-label" for="gerente">Gerente</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="posicion" id="vendedor" value="Vendedor">
                <label class="form-check-label" for="vendedor">Vendedor</label>
            </div>
        </div>
        <div class="d-grid gap-2 col-8 mx-auto">
            <button class="btn btn-custom" type="button">Mostrar datos</button>
        </div>
    </form>

</body>
</html>