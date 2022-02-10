<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titulo>Formulario</titulo>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
</head>
<body>

    <?php
        include('conexion.php');
    ?>

    <header>
        <div class="container text-center mt-5">
            <h1>Formulario</h1>
        </div>
    </header>

    <section class="d-flex justify-content-center">
        <div class="col-md-5">
            <div class="mb-3 mt-3">
                <!--INICIO FORMULARIO-->
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="ej:El principito">
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" name="autor" class="form-control" placeholder="ej:Antoine de Saint-Exupéry">
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">editorial</label>
                        <input type="text" name="editorial" class="form-control"  placeholder="ej:Salamandra">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo">
                            <option selected value="Libro">Libro</option>
                            <option value="NovelGrafica">Novela Grafica</option>
                            <option value="Comic">Comic</option>
                            <option value="Manga">Manga</option>
                            <option value="Revista">Revista</option>
                            <option value="Manhwa">Manhwa</option>
                            <option value="Otro">Otro</option>
                          </select>
                    </div>
                    <div class="mb-3">
                       <p>Formato</p> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formato" value="electronico" checked>
                            <label class="form-check-label" for="formato">
                              Electronico
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="formato" value="fisico">
                            <label class="form-check-label" for="formato">
                              Fisico
                            </label>
                          </div>  
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a class="btn btn-link m-md-5" href="index.php" role="button">Regresar a pagina principal</a>

                </form>
            </div>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>