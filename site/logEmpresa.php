<?php
  include_once("include_dao.php");
  $funcoes = new EmpresaDAO();
  $resultado = $funcoes->listarTodos();
  if(!empty($resultado)){
    $empresa = $resultado[0];
  }
  $nome = isset($empresa['nome'])?$empresa['nome']:"";
  $email = isset($empresa['login'])?$empresa['login']:"";
  $tel = isset($empresa['numero'])?$empresa['numero']:"";
  $endereco = isset($empresa['rua'])?$empresa['rua']:"";
  $senha = isset($empresa['senha'])?$empresa['senha']:"";
  $imagem = isset($empresa['imgLogo'])?$empresa['imgLogo']:"header-bg.jpg";
  if(empty($imagem)){
    $imagem = "header-bg.jpg";
  }
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
  <script src="../js/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pet Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <title></title>
  <script src="../js/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="cadastro.php">Pet Shop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          
          <li class="nav-item">
            <a class="nav-link text-secondary" href="logEmpresa.php">Cadastrar empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="cadProduto.php">cadastrar produto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="listarProdutos.php">Editar Produto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-secondary" href="cadVet.php">Cadastro do Vetenário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="admin.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>


  <div class="container shadow" style="width: 70%; height: 70%; background: white; border-radius: 1%; ">
    <!-- AREA PARA CADASTRO -->
    <center><h1 class="">Dados da Empresa</h1></center>
     <form method="POST" enctype="multipart/form-data"  action="logEmpresaFunc.php">

      <div class="form-group">
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required value="<?=$nome?>">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" id="tel" name="tel" placeholder="Telefone" required value="<?=$tel?>">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço" required value="<?=$endereco?>">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" id="email" name="email" placeholder="Email" required value="<?=$email?>">
      </div>

      <div class="form-group">
        <input class="form-control" type="text" id="senha" name="senha" placeholder="Senha" required value="<?=$senha?>">
      </div>


      <center>
        <h2>Imagem de Fundo</h2>
          <img src="img/bg/<?=$imagem?>" style='width: 200px'>
        </br></br>

        
          <div>
            <label for="arquivo" class="btn btn-dark btn-sml text-white shadow">
              <p class="text-white">Selecione uma Imagem</p>
            </label>
              <input name="arquivo" type="file" id="arquivo" style="display: none;" />
          </div>
        </center>


        <div class="form-group float-right">
          <input type="submit" value="Salvar" name="salvar" class="btn btn-success shadow">
        </div>  

      <br><br>
    </form>
  </div>
    
</body>
</html>