
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
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="cadastro.php">Pet Shop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      </div>
  </nav>
  <br>
  <!-- Contatos -->
  <section id="contact" style="background-color: white; margin-top: -12%" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase text-dark">Área restrita à administração</h2>
        </div>
      </div>
      <div class="container shadow" style="padding-top: 4.3%; background-color: white;width: 70%; border-radius: 1%;">
          <form method="post">
            <div class="row"> 
              <div class=" col-lg-3"></div>
              <div class=" col-lg-6">

              
              <div class="col-lg-12 ">
                <div id="success"></div>
                <div class="button btn btn-outline-dark btn-block">
                  <a href="logEmpresa.php"> Cadastrar Empresa </a>
                </div>
                  <br>

                <button type="button"class="btn btn-outline-dark btn-block">
                 <a href="cadProduto.php">Cadastrar Produtos</a>
               </button>
                
               <br>

                <div class="button btn btn-outline-dark btn-block">
                  <a href="listarprodutos.php">Editar Produtos</a>                
                </div>
                <br> 

                 <div class="button btn btn-outline-dark btn-block">
                   <a href="cadVet.php">Cadastrar Veterinário</a>
                  </div>
                    <br>

                    <div class="button btn btn-outline-dark btn-block">
                   <a href="admin.php">Logout</a>
                  </div>
                    <br><br>
              </div>
            </div>
          </form>
      </div>
    </div>
  </section>
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
