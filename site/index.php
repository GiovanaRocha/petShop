  <?php
include("include_dao.php");
$funcoes = new EmpresaDAO();
$funcoesProduto = new ProdutoDAO();
$funcoesVeterinario =new VeterinarioDAO();
$veterinario = $funcoesVeterinario->listarTodos();
$produtos = $funcoesProduto->listarTodos();
$resultado = $funcoes->listarTodos();
$empresa = $resultado[0];
$imagemBg = $empresa['imgLogo'];
$produto = $resultado[0];

foreach ($veterinario as $key) {
  $desc = $key['descricao'];
  $nome = $key['nome'];
  $img = $key['imgVet'];
  

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
      <a class="navbar-brand js-scroll-trigger" href="admin.php">Pet Shop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="#page-top">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="#about">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="#services">Produtos e Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="#team">Veterinário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-secondary" href="admin.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Home -->
  <header class="masthead" style="background-image: url(img/bg/<?=$imagemBg?>)">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase text-dark"><?=$empresa['nome']?></div>
        <div class="intro-heading text-uppercase text-dark">O melhor para seu pet</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Confira!</a>
      </div>
    </div>
  </header>

  <!-- Produtos Serviços -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nossos Produtos e Serviços</h2>
          <h3 class="section-subheading text-muted">Variedade de produtos e serviços.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-bath fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Banho</h4>
          <p class="text-muted">Banhos simples e medicinais e hidratação para caninos e felinos de todos os portes.
          
          <button onclick="window.location.href='https://api.whatsapp.com/send?phone=5588981409227&text=Ola%2C%20preciso%20de%20fazer%20uma%20tosa%20no%20meu%20pet'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-whatsapp"></i> Enviar Mensagem</a>
          </p>
 
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-cut fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Tosa</h4>
          <p class="text-muted">Tosa simples, tosa higiêncica, tosa bebê, tosa na tesoura e tosa padrão.

          <button onclick="window.location.href='https://api.whatsapp.com/send?phone=5588981409227&text=Ola,%2C%20preciso%20de%20fazer%20uma%20tosa%20no%20meu%20pet'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-whatsapp"></i> Enviar Mensagem</a>
          </p>
        </div>
         <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-user-md fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Consultas a Domicílio</h4>
          <p class="text-muted">Consultas a domicílio, prevenção de doenças, exames laboratoriais, internações e cirurgias.
          <button onclick="window.location.href='https://api.whatsapp.com/send?phone=5588981409227&text=Ola,%2C%20pretento%20marcar%20uma%20consulta%20para%20meu%20pet'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-whatsapp"></i> Enviar Mensagem</a>
          </p>
        </div>
        
      </div>
      <div class="col-lg-12 text-center">
      <div class="row text-center center">
        
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-cart-plus fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Acessórios</h4>
          <p class="text-muted">Shopping completo para o seu Pet com diversos tipos de produtos e acessórios.</p>
            <button onclick="window.location.href='#portfolio'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-sistrix"></i> Confira</a>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-medkit fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Medicamentos</h4>
          <p class="text-muted">Medicamentos e vacinas importadas e nacionais.

          </p>
            <button onclick="window.location.href='#portfolio'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-sistrix"></i> Confira</a>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-basket fa-stack-1x fa-inverse "></i>
          </span>
          <h4 class="service-heading">Rações</h4>
          <p class="text-muted">Variedades de rações e petiscos para caninos e felinos de todas as faixas etárias.
          </p>

            <button onclick="window.location.href='#portfolio'" id="sendMessageButton" class="btn btn-primary  text-uppercase" style="margin-top:7px; height: 2.4em" type="submit"><i class="fab fa-sistrix"></i> Confira</a>
        </div>
      </div>
     </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Confira os produtos mais vendidos.</h3>
        </div>
      </div>
      <div class="row">
        <?php 
          foreach ($produtos as $produto) {
        ?>
         <div class="col-md-4 col-sm-6 portfolio-item" style="background-image: url(img/gr/<?=$imagemPort?>)">
          <a class="portfolio-link" data-toggle="modal" data-target="#portfolioModal1" data-whatever="<?=$produto['cod']?>" data-whatevernome="<?=$produto['nome']?>" data-whateverpreco="<?=$produto['preco']?>" data-whateverdescricao="<?=$produto['descricao']?>" data-whateverimagem="<?=$produto['img']?>">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/gr/<?=$produto['img']?>" alt="">
          </a>
          <div class="portfolio-caption">
            <p class="text-fluid" ><?=$produto['nome']?></p>
          </div>
        </div>
        <?php
          }
        ?>

      </div>
    </div>
  </section>

  <!-- Sobre Nós -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Sobre Nós</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            

            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4><br>Localização<br></h4>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <br><h4><?=$empresa['rua']?></h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Nosso Veterinario -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nosso Veterinario</h2>
          <h3 class="section-subheading text-muted">Conheça o nosso veterinário e sua experiência</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/vt/<?=$img?>" alt="">
            <h4 class="large text-muted"><?=$nome?></h4>
            <p class="text-muted">Veterinario</p>
            <ul class="list-inline social-buttons">
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
        </div>
        <div class="col-sm-8">
          <div class="mx-auto">
             <p class="large text-muted"><?=$desc?></p>
          </div>
        </div>
    </div>
  </section>
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

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr" style="margin-left: 65px">
            <div class="rl"></div>
          </div>
        </div>
        
        <div class="container">
          <div class="modal-body">
              <div class="row">
                <div class="col-lg-12" style="padding-top: 2%; padding-bottom: 2%">
                  <h2 id="mNome" class="text-uppercase"></h2> 
                </div>  
              </div>                
              <div class="row">
                <div class="col-lg-6">
                  <img id="mImg" class="img-fluid d-block mx-auto" src="img/gr/<?=$produto['img']?>" alt="">
                </div>
                <div class="col-lg-6">
                  <!-- Detalhes do produto/serviço -->
                  <p class="item-intro text-muted">O melhor para seu pet!</p>
                   <p id="mDesc" style="text-align: justify;"><?=$produto['descricao']?></p>
                   <h6 class="text-uppercase">PREÇO</h6>
                   <p id="mPrec" style="text-align: center;"> <?=$produto['preco']?>R$</p>
                  <a href="https://api.whatsapp.com/send?phone=5588981409227&text=Ola%2C%20desejo%20de%20fazer%20a%20compra%20deste%20produto" class="btn btn-primary">
                  COMPRAR</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    $('#portfolioModal1').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever')
      var recipientnome = button.data('whatevernome')
      var recipientpreco = button.data('whateverpreco')
      var recipientimg = button.data('whateverimagem')
      var recipientdescricao = button.data('whateverdescricao') // Extract info from data-* attributes
  

      var modal = $(this)
      modal.find('#mDesc').text(recipientdescricao)
      modal.find('#mPrec').text(recipientpreco)
      modal.find('#mImg').attr('src', 'img/gr/' + recipientimg)
      modal.find('#mNome').text(recipientnome)
    });
  </script>

</body>

</html>
