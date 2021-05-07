<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
        <h1>SALUDO</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
          <form action="<?=URL?>test/saludo" method="post">
            <div class="form-group">
               <label for="">nombre</label>
               <input type="text" name="nombre" id="nombre"class="form-control"value="<?=$nombre?>">
            </div> 
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
    </div>
    <br>
          <div class="row">
             <div class="col-sm-8">
               Respuesta:Hola <label><?=$nombre?></label> <input type="text" class="form-control"value="<?=$nombre?>" disabled>
          </div>
          </div>
    </div>
</body>
</html>