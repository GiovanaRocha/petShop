<?php
include_once 'DTO/produto.php';
include_once 'DAO/produtoDAO.php';
  $cod = isset($_POST['cod'])?isset($_POST['cod']):"";
  $e_nome = isset($_POST['e_nome'])?isset($_POST['e_nome']):"";
  $e_preco = isset($_POST['e_preco'])?isset($_POST['e_preco']):"";
  $e_descricao = isset($_POST['e_descricao'])?isset($_POST['e_descricao']):"";
  $editar = isset($_POST['editar'])?$_POST['editar']:"";
  if (!empty($editar)) {
      $produtoDAO = new ProdutoDAO();
      $produto = new Produto();
      $produto->setCod($cod);
      $produto->setNome($e_nome);
      $produto->setPreco($e_preco);
      $produto->setDescricao($e_descricao);
      $produtoDAO->atualizar($produto);
    }  
$dCod = isset($_POST['dCod'])?isset($_POST['dCod']):"";
$produtoDAO = new ProdutoDAO();
$produtoDTO = new Produto();
$deletar = isset($_POST['apagar'])?$_POST['apagar']:"";
if (!empty($_POST['apagar'])) {
  $produtoDAO->deletar($_POST['dCod']);
}

if (!empty($_POST['editar'])) {
  $produtoDTO->setCod($_POST['e_cod']);
  $produtoDTO->setPreco($_POST['e_preco']);
  $produtoDTO->setNome($_POST['e_nome']);
  $produtoDTO->setDescricao($_POST['e_descricao']);
  $produtoDAO->atualizar($produtoDTO);
}


?>
<!DOCTYPE html>
<html lang="en">

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

<body id="page-top">

  <!-- Navigation -->
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


  <?php

  include ("include_dao.php");

  $dao = new  ProdutoDAO();
  $produtoModel = new Produto();

  $funcao = $dao -> listarTodos();
 ?>

  <div class="container shadow" style="width: 70%; border-radius: 1%;">
        <span> 
          <blockquote>
            <center><h2 class="text-dark">Todos os Produtos</h2></center>
          </blockquote>
        <div class="mx-auto">
        </span>

          <table id="tabela" class="bordered centered table table-responsive">
            <thead class="">
              <tr>
                <th class="text-dark" style="width: 30%;"> Id </th>  
                <th class="text-dark" style="width: 30%;"> Nome </th>    
                <th class="text-dark" style="width: 30%;"> preco </th>    
                <th class="text-dark" style="width: 30%;"> Descrição </th>    
                <th class="text-white"> Editar</th>
                <th class="text-dark"> Deletar</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach ($funcao as $c){  ?>
              <tr >
                <td><?=$c['cod']?></td> 
                <td><?=$c['nome']?></td>    
                <td><?=$c['preco']?></td>    
                <td style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; "> <br><?=$c['descricao']?></td>    
                <td><a class="button " ><button class="btn-dark" onclick="mandar_editar('<?=$c['cod']?>','<?=$c['nome']?>','<?=$c['preco']?>','<?=$c['descricao']?>')">Editar</button></a></td>
                <td>
                  <form method="post">
                    <input type="hidden" name="dCod" id="cod" value="<?=$c['cod']?>">
                    <input type="hidden" class="button" name="apagar" value="Apagar">
                    <input type="submit" name="deletar" value="Deletar" class="btn-dark">
                  </form>
                </td>
              </tr>
                  <?php }?>  
                  </tbody>
          </table>
          <form method="post">
            <input type="hidden" name="e_cod" id="e_cod">
            <input type="hidden" name="editar" value="Editar">

            <input type="text" name="e_nome" id="nome" style="width: 30%;">
            <input type="text" name="e_preco" id="preco" style="width: 30%;">
            <input type="text" name="e_descricao" id="descricao" style="width: 30%">
            <input type="submit" name="editar" value="Salvar" class="btn-dark shadow" style="border-radius: 1%;">
          </form>

          <br><br>
  </div>
</div>

  <script src="vendor/jquery/jquery.min.js"></script>
  

  <script type="text/javascript">
    $(document).ready( function () {
    $('#tabela').DataTable();
    alert('eae');
} );
  </script>
  <script type="text/javascript">
    function mandar_editar(cod,nome,preco,descricao){
      $('#e_cod').val(cod);
      $('#nome').val(nome);
      $('#preco').val(preco);
      $('#descricao').val(descricao);
    }
  </script>
  <div id="dropDownSelect1"></div>

    <div class="footer-copyright">
      <div class="container">
      <ul class="right hide-on-med-and-down">
      </ul>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  
 <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://api.whatsapp.com/send?phone=88981484849">
                <i class="fab fa-whatsapp"></i>
              </a>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>