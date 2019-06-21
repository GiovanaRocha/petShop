
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gerador de DAO com PDO - Dalker Pinheiro</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <div class="row"> 
          <blockquote>
            <h2 class="titulo header text-darken-3">Gerador de Classes e DAO em PHP com PDO</span></h2> 
          </blockquote>
          <?php
          session_start();
          if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])){
            ?>
            <div class='mensagem center white-text red darken-1' style='margin-top:3%; margin-bottom: -1%'>
              Arquivos criados com <b>sucesso</b>! Clique <b><a style="color:white" href="gerados/<?=$_GET['nome']?>.zip">AQUI</a></b> para download dos arquivos gerados.
            </div>
            <?php
            unset($_SESSION['msg']);
            session_destroy();
          }
          ?>
        </div>
        <div class="row">
          <h3 class="header center red-text text-darken-1">Preencha o Formulário</h3>
        </div>
        <div class="row">
          <form class="col s12" method="POST" action="gerar.php">
            <div class="row">
              <div class="input-field col l6 col s12">
                <input placeholder="Ex: localhost" id="host" type="text" name="host" required>
                <label for="host" >Endereço do Banco</label>
              </div>
              <div class="input-field col l6 col s12">
                <input placeholder="Nome do seu banco" id="nomebd" type="text" name="nomebd" required>
                <label for="nomebd">Nome do Banco</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l6 col s12">
                <input placeholder="Caso deixe em branco o padrão será root" id="usuario" type="text" name="usuario">
                <label for="usuario">Usuário do Banco</label>
              </div>
              <div class="input-field col l6 col s12">
                <input placeholder="Caso deixe em branco o padrão será sem senha" id="senha" type="text" name="senha">
                <label for="senha">Senha do Banco</label>
              </div>
            </div>
            <div class="row center">
              <button type="submit" class="btn btn-large waves-effect waves-light red darken-1">Gerar Classes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="page-footer red darken-1 center-align">
      <div class="footer-copyright ">
        <div class="container">
          Desenvolvido por <a class="orange-text text-lighten-3" href="http://www.dalkerpinheiro.com.br">Dalker Pinheiro</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){ 
        $('.row').hide();
        $('h3').hide().fadeIn(2000);
        $('.row').hide().fadeIn(2000);
        $('button').hover(function(){
           $('button').css("width","25%");
        },function(){
           $('button').css("width","20%");
        });
        $('h2').hide().slideDown();
      });
    </script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
  </html>
