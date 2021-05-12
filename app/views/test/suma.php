<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Inicio']);?>
<!----------------------------------------------------------------------------------->

<?php $this->push('styles')?>
<!--Colocar los links a los archivos css-->
<?php $this->end()?>

<?php $this->start('contents')?>
<?php $title_jumbotron ='BIENVENIDO A SUMA'?>
<?php $text_jumbotron ='LA PAGINA SUMA'?>
<?php include MAINPATH . 'app/views/layouts/partials/_jumbotron.php' ?>

<div class="container">
      <div class="row">
        <div class="col-sm-8">
        <h2>SUMA</h2>
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
  <?php $this->stop()?>
  <?php $this->push('scripts')?>






   
