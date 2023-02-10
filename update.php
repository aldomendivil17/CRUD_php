<?php
include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Grado=$_POST['Grado'];
$Promedio=$_POST['Promedio'];

$sql="UPDATE alumnos SET Nombre='$Nombre', Grado='$Grado', Promedio='$Promedio' WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    } 
     
?>