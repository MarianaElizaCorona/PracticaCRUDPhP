<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lectura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
        include('conexion.php');
    ?>
    <header>
        <div class="card bg-dark text-light container text-center mt-5">
            <h1>Lecturas Terminadas</h1>
        </div>
        <h5 class="mt-3 text-center">Registro de todos los libros, revistas, comic, etc que ha finalizado</h5>
    </header>

    <section>
        <div class="container text-center mt-5">
            <h4>Agregar un nuevo libro</h4> 
            <a class="btn btn-primary mt-3" href="formulario.php" role="button">Registro</a>
        </div>
    </section>

    <div class="container mt-5">
        <h4>Consulta</h4> 
    </div>

    <div class="col-md-8 mx-auto mt-5"> 
        <table class="table table-hover"> 
            <thead> 
                <tr>  
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Tipo</th>
                    <th>Formato</th>
                </tr>
            </thead> 

            <tbody> 
                <?php 
                    $sql = "SELECT * FROM datos";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    
                    foreach ($stmt->fetchAll() as $row) {
                ?>
                <tr> 
                    <td><?php echo $row['titulo'] ?></td>
                    <td><?php echo $row['autor'] ?></td>
                    <td><?php echo $row['editorial'] ?></td>
                    <td><?php echo $row['tipo'] ?></td>
                    <td><?php echo $row['formato'] ?></td>
                </tr>
                <?php } ?>                
            </tbody>
        </table> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>