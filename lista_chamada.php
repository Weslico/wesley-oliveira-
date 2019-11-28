<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de chamada</title>
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
      <h1 class="title">LISTA DE CHAMADA</figure></h1>
      <h2 class="subtitle">Turma: Redes de Computadores 1º Semestre</h2>
    </div>
  </div>
</section>
<!--FIM -->
<div class="notification is-success"><h1>Olá, <?php echo $_SESSION['nome'];?>. 
</br> Confira sua Lista de Presença na Tabela Abaixo.</h1>
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

<div class="tile is-parent">
      <article class="tile is-child notification is-danger">
        <p class="title">LISTA DE PRESENÇA E NOTAS </p>
          <div class="tile is-parent is-6">
            <article class="tile is-child box">
        <p class="title">Lista</p>
        <p class="subtitle">Novembro / 2019</p>
        <div class="content"></div>
    <!-- TESTE DE NOVA TABELA -->

<!-- TH =  LINHAS / TD = COLUNAS -->
<table class="table">
  <thead>
    <tr>
      <tr class="is-selected">
      <th><abbr title="Position">Professor</abbr></th>
      <th>Disciplina </th>
      <th><abbr title="Played">Sala</abbr></th>
      <th><abbr title="Won">Data</abbr></th>
      <th><abbr title="Drawn">Faltas</abbr></th>
      <th><abbr title="Lost">Notas</abbr></th>
      <th><abbr title="Goals for">PO1</abbr></th>
      <th><abbr title="Goals against">PO2</abbr></th>
      <th><abbr title="Goal difference">PO3</abbr></th>
      <th><abbr title="Points">       </abbr></th>
      <th>        </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>ANGELA</th>
      </td>
      <td>Fundamentos de Administração Geral</td>
      <td>3</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      </tr>
    
    <tr>
      <th>JANAINE / WELLINGTON</th>
      <td>Algoritmos</td>
      <td>LAB 12</td>
      <td>11</td>
      <td>7</td>
      <td>65</td>
      <td>36</td>
      <td>+29</td>
      <td>71</td>
      </tr>
    
    <tr>
      <th>ELENIR</th>
      <td>Inglês I</td>
      <td>06</td>
      <td>13</td>
      <td>6</td>
      <td>69</td>
      <td>35</td>
      <td>+34</td>
      <td>70</td>
      </tr>
    
    <tr>
      <th>MICHEL</th>
      <td>Organização de Computadores</td>
      <td>11</td>
      <td>9</td>
      <td>10</td>
      <td>71</td>
      <td>41</td>
      <td>+30</td>
      <td>66</td>
      </tr>
    <tr>
      <th>MICHEL</th>
      <td>Fundamentos de Redes de Computadores</td>
      <td>19</td>
      <td>9</td>
      <td>10</td>
      <td>49</td>
      <td>35</td>
      <td>+14</td>
      <td>66</td>
      </tr>
    
    <tr>
      <th>JAIME MATIUSO</th>
      <td>Cabeamento Estruturado</td>
      <td>LAB 12</td>
      <td>9</td>
      <td>11</td>
      <td>59</td>
      <td>41</td>
      <td>+18</td>
      <td>63</td>
      </tr>
    
    <tr>
      <th>ALEX WANDERLEY</th>
      <td>Laboratório de Desenvolvimento I (Redes de computadores)</td>
      <td>Lab 12</td>
      <td>14</td>
      <td>8</td>
      <td>65</td>
      <td>51</td>
      <td>+14</td>
      <td>62</td>
      </tr>

      <tr>
      <th>CARLOS FRAGOSO</th>
      <td>Matemática Discreta</td>
      <td>3</td>
      <td>14</td>
      <td>8</td>
      <td>65</td>
      <td>51</td>
      <td>+14</td>
      <td>62</td>
      </tr>
      <tr>

      <th>NOME DO PROFESSOR </th>
      <td>MATERIA </td><td>SALA</td><td>DATA</td><td>FALTAS</td><td>NOTAS</td><td>PO1</td><td>PO2</td><td>PO3</td>

    </tr>
  </tbody>
</table>


<!-- FIM DO CÓDIGO! -->



    </article>
  </div>
</div>


</br>
</br>
</br>
<button class="button is-danger is-rounded"><a href="logout.php"><has-text-white>SAIR</a></button> 

