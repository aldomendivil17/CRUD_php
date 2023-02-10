<?php
include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Grado=$_POST['Grado'];
$Promedio=$_POST['Promedio'];

$sql="INSERT  INTO alumnos VALUES('$ID', '$Nombre', '$Grado', '$Promedio')";
$query=mysqli_query($con, $sql);

if($query){
    Header("Location: alumno.php");
} else{  
}
?>