<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumnos WHERE ID='$id'";
$query=mysqli_query($con, $sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Actualizar</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
</head>
<body>
<div class="container mt-5">
        <form action="update.php" method="POST">
                <h2>
                    <?php
                        echo 'Actualizar datos de ID: ' . $row['ID'];
                    ?> 
                </h2><br>
                <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">

                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'] ?>">
                    <input type="text" class="form-control mb-3" name="Grado" placeholder="Grado" value="<?php echo $row['Grado'] ?>">
                    <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio" value="<?php echo $row['Promedio'] ?>">
            
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
        
    </div>              
</body>
</html>