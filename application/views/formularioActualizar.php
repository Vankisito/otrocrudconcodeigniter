
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar</title>
    <style>
         .div_btn{
            display:flex;
            justify-content:center;
            
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo base_url('welcome/actualizar');?>">
        <div class="mb-3">
        <label for="floatingInput1" class="form-label">Id</label>
        <input type="text" name="id" id="floatingInput1" disabled class="form-control" placeholder="Id..." readonly value="<?php echo $vehiculo->id_vehiculo; ?>">
        </div>
        <div class="mb-3">
        <label for="floatingInput2"  class="form-label">Placa</label>
        <input type="text" name="placa" id="floatingInput2" class="form-control" placeholder="Placa..." value="<?php echo $vehiculo->placa; ?>">
        </div >
        <div class="mb-3">
        <label for="floatingInput3"  class="form-label">Marca</label>
        <select class="form-select" aria-label="Default select example" name="marca" id="floatingInput3"> 
            <?php foreach ($vehiculos as $key => $value):?>
                <option value="<?php echo $value->id_marca ?>"><?php echo $value->descripcion ?></option>
            <?php endforeach;?>    
        </select>
        </div>
        <div class="mb-3"> 
        <label for="floatingInput4"  class="form-label">Modelo</label>
        <input type="number" name="modelo" id="floatingInput4" class="form-control" placeholder="Modelo..." value="<?php echo $vehiculo->modelo; ?>">
        </div>
        <div class="div_btn">
        <button class="btn btn-primary" type="submit" >Actualizar</button>
        </div>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>