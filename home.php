<?php

require 'config/config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?= TITLE ?></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include 'controller/header.php'; ?>

    <div class="container-fluid">
      <div class="row">
	<div class='col-sm-3 col-md-2 sidebar'>
	  <ul class='nav nav-sidebar'> 
	    <?php include 'controller/menu.php'; ?>
	  </ul> 
	  <ul class='nav nav-sidebar'> 
	  </ul> 
	  <ul class='nav nav-sidebar'> 
	  </ul> 
	</div>
        <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
          <h2 class='sub-header'>Página Inicial</h2>
           <div class='table-responsive'>
	     <div class="panel panel-default panel-primary panel-success">
	     <div class="panel-body">
		Seja bem vindo ao nosso sistema de administração de salas de conferência.
		<br><br>
		Aqui você poderá criar e gerenciar as salas para conferências e aulas online <br>
		bem como consultar o estado atual das conferências em andamento, <br>
		verificar quantidade de alunos nas salas, definir senhas e muito mais!
	     </div>
  	   </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assevendor/jquery.min.js"><\/script>')</script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/dropdown.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
