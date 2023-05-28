<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include("menu.php"); 
    ?>
    <div class="container col-xl-12 col-md-12 col-sm-12 col-12">
        <br>
        <br>
        <h4>Editar perfil de un paciente</h4>
        <form class="row g-7" action="editar_perfil.php" method="post" enctype="multipart/form-data" id="frm_buscarpac">
            <div class="col-xl-auto col-md-5 col-sm-11  col-11">
                <label  class="form-label m-4">Seleccione un paciente:</label> 
            </div>
            <div class="col-xl-auto col-md-5 col-sm-11  col-11">
                <td><select name='ls_ced_pac' class='form-select m-3 '>
                    <option value='1'>1</option>
                    </select></td>
            </div>
            <div class="col-xl-auto col-md-5 col-sm-11  col-11">
                <input type="submit" value="Editar perfil"  class="btn btn-success --bs-success-rgb m-3 mb-3">
            </div>
        </form>
    </div>
        <br>
        <hr>
        <br>
        <br>
    <div class="container col-xl-12 col-md-12 col-sm-12 col-12 " >
    
    <form class="row g-7" action="upload.php" method="post" enctype="multipart/form-data" id="frm_fotoperfil" >
                <br><h5>Editar foto de perfil del paciente</h5>
                <div class='col-xl-2 col-md-5 col-sm-11  col-11'>
                <input type='hidden' id='campo_oculto_solicitud1' name='ls_ced_pac' value='$cedpac'>
                <table>
                    <tr><td><img class="img-thumbnail" width="200" height="300" src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png"/></td></tr>
                    </table>
                    </div>
                    
                                <div class='col-xl-4 col-md-5 col-sm-11  col-11'>
                                    <br>
                                    <label for='formFile' class='form-label'>Cargue o cambie foto de Perfil</label>
                                    <input class='form-control' type='file' id='formFile' name='txtarc'>
                                </div>
                                <div class='col-xl-4 col-md-5 col-sm-11  col-11'>
                                    <br>
                                    <input type='submit' value='Actualizar foto' class='btn btn-success --bs-success-rgb m-4 mb-3'>
                                    
                                    
                                </div>
            
        </form>

        <form action='' method='post' id='formodpac'>
            <br><h5>Editar datos del paciente</h5>
                <hr>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>Genero</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                <tr>
                <form action='editar_perfil2.php' method='post' id='formodpac'>
                    <td><input type='text' name='cedula' value='1' readonly></td>
                    <td><input type='text' name='nombre' value='1'></td>
                    <td><input type='date' name='fecha' value=''></td>
                    <td><input type='text' name='genero' value=''></td>
                    <td><input type='text' name='telefono' value=''></td>
                    <td><button type='submit' class='btn btn-success'>Guardar cambios</button></td>
                    </form>
                    </tr>
                    </tbody>
                    </table>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>