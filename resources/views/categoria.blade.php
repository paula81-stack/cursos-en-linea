<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Categoría, Curso y Alumno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro de Categoría, Curso y Alumno</h2>
        <div class="row">
            <!-- Formulario para agregar categorías -->
            <div class="col-md-4">
                <h3>Agregar Categoría</h3>
                <form action="procesar_categoria.php" method="POST">
                    <div class="mb-3">
                        <label for="nombreCategoria" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Categoría</button>
                </form>
            </div>