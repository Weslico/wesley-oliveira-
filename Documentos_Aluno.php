<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentos Aluno</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<?php
include('verifica_login.php');
?>

<!--1º Coluna -->
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">DOCUMENTOS</figure></h1>
      <h2 class="subtitle">Turma: Redes de Computadores 1º Semestre</h2>
    </div>
  </div>
</section>
<!--FIM -->
<div class="notification is-success"><h1>Olá, <?php echo $_SESSION['nome'];?>. 
</br> Confira sua Lista de Documentos Anexados.</h1>
</div>

<!-- MENU DE NAVAGAÇÂO -->

<nav class="breadcrumb is-centered" aria-label="breadcrumbs">
  <ul>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->    
    <li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/home-icon.png" alt="Image"></figure>
      <a href="painel.php"><p>Portal do Aluno </a>
      </a>
    </li>
 <!-- ------------------------------------------------------------------------------------------------------------------------- -->   
      <li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/page-text-icon.png" alt="Image"></figure><a href="Documentos_Aluno.php"><p>Documetos</a>
      </a>
    </li>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->     
      <li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/window-app-list-icon.png" alt="Image"></figure>
      <a href="lista_chamada.php"><p>Lista de Presença</a>
      </a>
    </li>
<!-- ------------------------------------------------------------------------------------------------------------------------- --> 
      <li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/book-bookmarks-icon.png" alt="Image"></figure><a href="projetos_AACC.php"><p>Projetos /  AACC</a>
      </a>
    </li>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->     
  </ul>
</nav>
</button> 
<!-- FIM MENU DE NAVAGAÇÂO -->


<div class="field">
  <div class="file is-info has-name">
    <label class="file-label">
      <input class="file-input" type="file" name="resume">
      <span class="file-cta">
        <span class="file-icon">
          <i class="fas fa-upload"></i>
        </span>
        <span class="file-label">
          Importar Arquivo…
        </span>
      </span>
      <span class="file-name">
        Screen Shot 2017-07-29 at 15.54.25.png
      </span>
    </label>
  </div>
</div>




<a href="jogo01.php"><p>JOGO TESTE 01</a>
	<a href="jogo02.php"><p>JOGO TESTE 02</a>
		<a href="PHP Tic Tac Toe.php"><p>PHP Tic Tac Toe</a>