<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitacora terapias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include("menu.php"); 
    ?>
    <div class="container col-xl-12 col-md-12 col-sm-12 col-12" >
        <form class="row g-7" action='' method='post' id='form_bitacora'>
            <div class="col-xl-1 col-md-5 col-sm-11  col-11">
                <label  class="form-label m-4">Paciente:</label> 
            </div>
            <div class="col-xl-2 col-md-5 col-sm-11  col-11">
                        <td><select name='ls_ced_pac' class='form-select m-3'>
                        <option value='1'>1</option>
                        </select></td>
            </div>
            <div class="col-xl-2 col-md-5 col-sm-11  col-11">
                <label for="inputPassword2" class="form-label m-4" >Fecha inicial:</label>
            </div>
            <div class="col-xl-2 col-md-5 col-sm-11  col-11 text-left">
                <input type="datetime-local" class="form-control m-3" name="datetime_init1" required >
            </div>
            <div class="col-xl-2 col-md-5 col-sm-11  col-11">
                <label for="inputPassword2" class="form-label m-4" >Fecha final:</label>
            </div>
            <div class="col-xl-2 col-md-5 col-sm-11  col-11">
                <input type="datetime-local" class="form-control m-3" name="datetime_init2" required  >
            </div>
            <div class="col-xl-1 col-md-5 col-sm-11  col-11">
                <button type="submit" class="btn btn-success --bs-success-rgb m-3 mb-3">Buscar</button>
            </div>
        </form>
    </div>
    <br>
    <div id="divconsulta1" class="container col-xl-12 col-md-12 col-sm-12 col-12">
    <table class="table table-success table-striped">
<thead>
        <tr>
        <th>Número factura</th>
        <th>Cédula paciente</th>
        <th>Nombre paciente</th>
        <th>Fecha terapia</th>
        <th>Procedimiento</th>
        <th>Fisioterapeuta</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td colspan='6' align='center'>No hay citas registradas entre estas fechas</td>
        </tr>
        
        </tbody>
    </table>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>