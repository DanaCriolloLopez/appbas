<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="btn btn-outline-success"  href="">Regresar</a>

    </div>
    </nav>
    <div class="container col-xl-4 col-md-6 col-sm-12 col-12" >
        <br>
        <div class="text-center">
            <img src="https://educarenaccion.com/wp-content/uploads/2021/09/evaluacion_competencias-320x198.png.webp"  alt="..." style="width: 70%;">
        </div>
        <form action="" method="post" id="frm_inicio_sesion">
            <div class="mb-4">
                <label for="txtusu" class="form-label">Usuario: </label>
                <input type="text" class="form-control" name="txtusu" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">Solo para administración</div>
            </div>
            <div class="mb-4">
                <label for="txtcla" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="txtcla">
            </div>
            
            <button type="submit" class="btn btn-success --bs-success-rgb" >Iniciar sesión</button>
        </form>
    </div>

    <br>
    <br>
    <footer class="text-left text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    </section>
    <section class="">
        <div class="container text-left text-md-start mt-5">
            <div class="row mt-1 text-left">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-left">
                    <h6 class="text-uppercase fw-bold mb-4 text-left">
                        <i class="fas fa-gem me-3 text-left"></i>PARTICIPANTES
                    </h6>
                    <!-- <ul> -->
                        <p> DANA CRIOLLO LOPEZ</p>
                        <p>DAVID CRIOLLO GOMEZ</p>
                        <p>JUAN CAMILO INSUASTY</p>
                    <!-- </ul> -->
                </div>
                
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Derechos reservados:
        <a class="text-reset fw-bold" href="https://www.udenar.edu.co/">UDENAR</a>
    </div>
</footer>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>