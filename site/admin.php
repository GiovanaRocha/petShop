<?php 
  require_once("include_dao.php");
  $login = isset($_POST['login'])?$_POST['login']:"";
  $senha = isset($_POST['senha'])?$_POST['senha']:"";
  if(!empty($login) and !empty($senha)){
    $funcoes = new EmpresaDAO();
    $resultado = $funcoes->logar($login,$senha);
    if(!empty($resultado)){
      header("location:cadastro.php");
    }
    else{
      header("location:admin.php?erro");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

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

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger">Pet Shop</a>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="index.php">Voltar ao site</a>
          </li>
    </div >
  </nav>
  <section id="contact" style="background-color: white;  margin-top: -11%">
    <div class="container shadow" style=" background-color: white;width: 50%; height: 20%">
      <br><br>
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase text-dark">Área restrita à administração</h2>
        </div>
      </div>
      <div class="container" style="padding-top: 4.3%">
          <form method="post">
            <div class="row"> 
              <div class="text-center col-lg-3"></div>
              <div class="text-center col-lg-6">

              <?php 
                  if(isset($_GET['erro']))
                    echo "<p class='erroLogin' style='color:white'>Login ou Senha incorretos!</p>";
              ?>
                <div class="form-group">
                  <input class="form-control" name="login" type="text" placeholder="Login *" required="required" data-validation-required-message="Por favor, insira o Login.">
                  <p class="help-block text-danger"></p>
                  
                </div>
                <div class="form-group">
                  <input class="form-control" name="senha" type="password" placeholder="Senha *" required="required" data-validation-required-message="Por favor, insira a senha.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit">Logar</button>
              </div>
            </div>
          </form>
      </div>
      <br><br>

  </section>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script type="text/javascript">
    setTimeout(function(){ $('.erroLogin').css("display","none") ; }, 3000);
  </script>
</body>

</html>
