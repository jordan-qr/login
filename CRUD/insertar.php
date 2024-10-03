<?php 
include_once('../config/conexion.php');

$descripcion = $_POST['Descripcion'];
$categoria = $_POST['Categoria'];
$precio = $_POST['Precio'];

$sql = "INSERT INTO productos(descripcion,categoria,precio) VALUES ('$descripcion','$categoria','$precio')";

$query = mysqli_query($conn,$sql);

if($query===TRUE){
    header("Location: ../home.php");
}
?>
