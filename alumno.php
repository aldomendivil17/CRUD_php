<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM alumnos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Alumno</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
</head>
<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
            <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="Grado" placeholder="Grado">
                    <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio">
                    
                    <input type="submit" class="btn btn-primary">
                </form>
            </div> 

            <div class="col-md-9">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Grado</th>
                            <th>Promedio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead> 
                    
                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                <th><?php echo $row['ID']?></th>
                                <th><?php echo $row['Nombre']?></th>
                                <th><?php echo $row['Grado']?></th>
                                <th><?php echo $row['Promedio']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                </table>
            </div> 
        </div>   
    </div>
</body>
</html>