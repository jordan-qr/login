<?php
    include_once('../config/conexion.php');
    $codigo = $_REQUEST['Id'];

    $sql = "SELECT * FROM productos WHERE cod_producto = '$codigo' ";
    $query = mysqli_query($conn,$sql);

    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center">Editar Producto</h1>
    </div>
    <br>
    <div class="container">
        <form action="../CRUD/editar.php" method="POST">
            <input type="Hidden" name="Codigo" value="<?php echo $fila['cod_producto']?>">
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion"  value="<?php echo $fila['descripcion']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control"name="Categoria" value="<?php echo $fila['categoria']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control"name="Precio" value="<?php echo $fila['precio']?>">
            </div>
            <div class="container text-center" >
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
            <a href="../home.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>