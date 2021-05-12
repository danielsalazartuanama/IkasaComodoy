<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?=$this->e($title)?>Jumbotron Template · Bootstrap v4.6</title><!--Para que el titulo sea dinpamico-->

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    

    <!-- Bootstrap core CSS -->
<link href="<?=URL . 'css/bootstrap.min.css'?>" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=URL. 'css/jumbotron.css'?>" rel="stylesheet">
    <?=$this->section('styles')?>

  </head>
  <body>

<?php include MAINPATH . 'app/views/layouts/partials/_header.php' ?>


<main role="main"><?=$this->section('contents')?></main>

<?php include MAINPATH . 'app/views/layouts/partials/_footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="<?=URL .'js/bootstrap.bundle.min.js'?>"></script>

      <?=$this->section('scripts')?>
  </body>

</html>
