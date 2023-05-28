<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include("menu.php");
    ?>
    <div class="container col-xl-12 col-md-12 col-sm-12 col-12" >
        <br>
        <h6>Solicitud hecha por el paciente</h6>
        <table class="table table-success table-striped" id="tabla_citas">
                <thead>
                    <tr>
                        <th>Id Solicitud</th>
                        <th>Cédula</th>
                        <th>Solicitud</th>
                        <th>Número de sesiones</th>
                        <th>Franja horaria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td colspan="5">
                            No hay registros
                        </td>
                    </tr>
                </tbody>
        </table>
    
        
        <h6>Citas registradas</h6>
        <table class="table table-success table-striped">
                
                <thead>
                    <tr>
                        <th>Número factura</th>
                        <th>Fisioterapeuta</th>
                        <th>Procedimiento</th>
                        <th>fecha Cita</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td colspan="5">
                            No hay registros
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align='right'>
                            <button class='btn btn-success' onclick="">Recargar</button>
                        </td>
                    </tr>
                </tfoot>
        </table>
        <h6>Agendar Citas</h6>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Num factura</th>
                    <th>Cédula fisio</th>
                    <th>Id procedimiento</th>
                    <th>Fecha cita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <form action='' method='post' id='form_citas'>
                <td><input type='number' name='numfac' class='form-label' value='' readonly></td>
                <td><select name='ls_ced_fis' class='form-select'>
                    <option value='1'>1</option>
                    </select></td>
                    <td><select name='ls_proc' class='form-select'>
                        <option value='2'>2</option>
                        </select></td>
                    <td><input type='datetime-local' name='fecha_cita' class='form-select' required></td>
                    <td><button type='submit' class='btn btn-success' name='bt_agendar' id='bt_agendar'>Agendar cita</button></td>
                    </form>
                    </tr>
    
            </tbody>
        </table>
    </div>
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>