<?php
include("conexion.php");
$con=conectar();

$ID=$_GET['id'];

$sql="DELETE FROM alumnos WHERE ID='$ID'";
$query=mysqli_query($con, $sql);

if($query){
    Header("Location: alumno.php");
} else{  
}
?>