<?php
  include_once("include_dao.php");
  $funcoes = new produtoDAO();
  $resultado = $funcoes->listarTodos();
  if(!empty($resultado)){
    $produto = $resultado[0];
  }
  $nome = isset($produto['nome'])?$produto['nome']:"";
  $preco = isset($produto['preco'])?$produto['preco']:"";
  $descricao = isset($produto['descricao'])?$produto['descricao']:"";
  $imagem = isset($produto['img'])?$produto['img']:"full.jpg";
  if(empty($imagem)){
    $imagem = "full.jpg";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="../js/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">

  <div class="container">
    <!-- AREA PARA CADASTRO -->
    <h1>Dados de Produto</h1>
    <form method="POST" enctype="multipart/form-data"  action="cadProsFunc.php">
      <div class="form-group">
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required value="<?=$nome?>">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" id="preco" name="preco" placeholder="Preço" required value="<?=$preco?>">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" id="descricao" name="descricao" placeholder="Descrição" required value="<?=$descricao?>">
      </div>
      Foto do Produto:
      </br>
      <input name="foto" type="file"/>
      
      <div class="form-group float-right">
        <button type="submit" value="true" name="salvar" class="btn btn-success">Cadastrar</button> 
      </div>  
    </form>
  </div>
</body>
</html>