<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formmulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <style>
    body {
    background: linear-gradient(to left, #000000, #2f2f2f);
    }

h1 {
    text-align: center;
    margin-top: 30px;
    margin-left: -30px; /* Suave desplazamiento hacia la izquierda */
    font-weight: 600;
    color: #acbbc9ff;
}

form {
    max-width: 400px;
    margin: 40px auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.form-control {
    width: 80%; /* Tamaño más reducido */
    margin: 0 auto;
    border-radius: 8px;
    padding: 6px 10px;
}

label {
    display: block;
    text-align: center;
    margin-bottom: 5px;
    font-weight: 500;
    color: #495057;
}

.btn-custom {
    background-color: #495057;
    color: #f8f9fa;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-custom:hover {
    color: #f8f9fa;
    background-color: #343a40;
}
    </style>

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