<?php 
include_once("../config/conexion.php");
$codigo = $_REQUEST['Id'];

$sql = "DELETE FROM productos WHERE cod_producto = '$codigo' ";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: ../home.php");
}
?>