<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center">Productos</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("config/conexion.php");
                $sql = "SELECT * FROM productos";
                $query= mysqli_query($conn,$sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $fila['cod_producto'] ?></th>
                        <th scope="row"><?php echo $fila['descripcion'] ?></th>
                        <th scope="row"><?php echo $fila['categoria'] ?></th>
                        <th scope="row"><?php echo $fila['precio'] ?></th>
                        <th>
                            <a href="Forms/editarDato.php?Id=<?php echo $fila['cod_producto']?>" class="btn btn-warning">Editar</a>
                            <a href="CRUD/eliminarDato.php?Id=<?php echo $fila['cod_producto']?>"class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="Forms/agregarProducto.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>