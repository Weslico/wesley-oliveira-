
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<?php
include('verifica_login.php');
?>

<!--PRIMEIRA BLOCO-->
<section class="hero is-primary">
	<div class="hero-body">
    <div class="container">
      <h1 class="title">
        WESS BD
      </figure>
      </h1>
      <h2 class="subtitle">
        Redes de Computadores
      </h2>
    </div>
  </div>
</section>
<!--*************FIM**************-->

<!--SEGUNDO BLOCO-->
<div class="notification is-success">
	<h1>Olá, <?php echo $_SESSION['nome'];?>, Seja bem vindo ao seu Portal. </br></h1>
</div>

<!--*************FIM**************-->



<!-- MENU DE NAVAGAÇÂO -->

<nav class="breadcrumb is-centered" aria-label="breadcrumbs">
  <ul>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/home-icon.png" alt="Image"></figure><a href="painel.php"><p> Portal do Aluno</a></a></li>
 <!-- ------------------------------------------------------------------------------------------------------------------------- -->
<li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/page-text-icon.png" alt="Image"></figure><a href="Documentos_Aluno.php"><p> Documetos</a></a></li>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/window-app-list-icon.png" alt="Image"></figure><a href="lista_chamada.php"><p> Lista de Presença</a></a></li>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<li><figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/book-bookmarks-icon.png" alt="Image"></figure><a href="projetos_AACC.php"><p> Projetos /  AACC</a></a></li>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
  </ul>
</nav>

<!-- FIM MENU DE NAVAGAÇÂO -->


<!-- CAIXA DE INFORMAÇÕES DO ALUNO-->

<div class="box">
  <article class="media">
    <div class="media-left">
<!-- IMAGEM DO ALUNO
      <figure class="image is-96x96">
        <img src="https://scontent.fcgh39-1.fna.fbcdn.net/v/t31.0-8/14711411_1202998669772505_7456200910235627040_o.jpg?_nc_cat=108&_nc_oc=AQkPXgVW7TivUpw_0_nVoDpSgmnGx4M8TzSslbDAGNF4pJevI4JGwBzQGHaAn8zWOLo&_nc_ht=scontent.fcgh39-1.fna&oh=1aa137c36148503dac85e324bca0364b&oe=5E5860A2" alt="Image">
      </figure>
-->


    </div>
    <div class="media-content">
      <div class="content">
         <p>
         	<button class="button is-danger is-rounded">
         		<strong><?php echo $_SESSION['nome'];?></strong>
         	</button>
         		</br>
         	Email Institucional: <a href="https://nam.delve.office.com/?u=84e1edd2-9f75-473a-99b9-8bd51b840404&v=work">Email Institucional do Aluno da Fatecid</a>
         		</br>
         	Curso Superior de Tenlonolia em Redes de Computadores
         		</br>
         	Periodo: Manhã		|	Expedição: 05/08/19
		  		</br>
		  <strong><?php echo $_SESSION['ra'];?></strong><!--	RA: 1050291921041	|	--><?php echo $_SESSION['cpf'];?>CPF:376.638.298.59
		  		</br>
		  <?php echo $_SESSION['rg'];?>	RG: 44.563.658-0	|	<?php echo $_SESSION['nascimento'];?>Nascimento: 16/05/1989
    </br>
  </article>
</div>
<!-- FIM CAIXA DE INFORMAÇÕES DO ALUNO-->


<div class="notification is-info"><p>
	Instituição: <a href="http://www.fatecid.com.br/site/"> Fatec - Faculdade de Tecnologia de Indaiatuba "Dr.Archimedes Lammoglia". </a>
      </br>
          Local:Rua Dom Pedro I, 65 - Cidade Nova I / CEP 13334-100
      </br>
          Contato: (19) 3885-1923
        </p>
	</p>
</div>
</br>
<button class="button  is-rounded">
	<figure class="image is-24x24"><img src="http://icons.iconarchive.com/icons/wefunction/woofunction/32/close-icon.png"></figure>
		<a href="logout.php"><p> Sair </p></a>
</button>
