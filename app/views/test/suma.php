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
        <h1>SUMA</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
          <form action="<?=URL?>test/suma" method="post">
            <div class="form-group">
               <label for="">Numero 1</label>
               <input type="text" name="0" id="0"class="form-control"value="<?=$num1?>">
            </div> 
            <div class="form-group">
               <label for="">Numero 2 </label>
               <input type="text" name="1" id="1"class="form-control"value="<?=$num2?>">
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
               Respuesta:LA SUMA ES <label><?=$rpta?></label> <input type="text" class="form-control"value="<?=$rpta?>" disabled>
          </div>
          </div>
    </div>
</body>
</html>