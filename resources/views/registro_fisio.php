<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include("menu.php"); 
    ?>
    <div class="container">
        
        <br>
        <br>
        <h2>Añadir fisioterapeuta</h2>

        <div class="row ">
            <div class="col-6">
                <form action="" method="post" id="frm_add_fisio">
                    
                    <label class="form-label m-3">Cédula</label>
                    <input type="number" name="txtced" class="form-control" required>

                    <label class="form-label m-3">Nombres</label>
                    <input type="text" name="txtnom" class="form-control" required>

                    <label class="form-label m-3">Teléfono</label>
                    <input type="number" name="txttel" class="form-control" required>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-success --bs-success-rgb">
                    <input type="reset" value="Limpiar" class="btn btn-success --bs-success-rgb">
                    
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>