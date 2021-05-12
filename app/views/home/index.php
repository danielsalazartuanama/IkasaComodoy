<?php
$this->layout('../layouts/layout',['title'=>'HTGVentas| Inicio']);?>
<!----------------------------------------------------------------------------------->

<?php $this->push('styles')?>
<!--Colocar los links a los archivos css-->
<?php $this->end()?>

<!----------------------------------------------------------------------------------->
<!--aqui inicia la section-->
<?php $this->start('contents')?>
<?php $title_jumbotron ='Bienvenidos'?>
<?php $text_jumbotron ='Bienvenidos a la pagina'?>


  <div class="container">
  <?php include MAINPATH . 'app/views/layouts/partials/_jumbotron.php' ?>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Standing on the frontline when the bombs start to fall. Heaven is jealous of our love, angels are crying from up above. Can't replace you with a million rings. Boy, when you're with me I'll give you a taste. There’s no going back. Before you met me I was alright but things were kinda heavy. Heavy is the head that wears the crown.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Playing ping pong all night long, everything's all neon and hazy. Yeah, she's so in demand. She's sweet as pie but if you break her heart. But down to earth. It's time to face the music I'm no longer your muse. I guess that I forgot I had a choice.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->
<?php $this->stop()?>
<!----------------------------------------------------------------------------------->
