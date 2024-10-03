<?php 
    include_once("../config/conexion.php");

    $codigo = $_POST['Codigo'];
    $descripcion = $_POST['Descripcion'];
    $categoria = $_POST['Categoria'];
    $precio = $_POST['Precio'];

    $sql = "UPDATE productos SET descripcion = '$descripcion',categoria = '$categoria',precio = '$precio' WHERE cod_producto='$codigo'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('Location: ../home.php');
    }
?>