<?php
//INCLUI AS FUNCOES DAO E DTO
include_once("include_dao.php");

//CRIA AS VARIAVEIS DE CONTROLE
$funcoes = new VeterinarioDAO();
$veterinario = new veterinario();

//PEGA A FOTO CASO SETADA...
$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:"";

//DESTINO PADRAO DAS IMAGENS
$destino = 'img/vt/';

//PEGA A IMAGEM
$imagem = isset($_FILES['arquivo']['name'])?$_FILES['arquivo']['name']:"";

//PEGA O NOME TEMPORARIO DA IMG 
$arquivo_tmp = $arquivo['tmp_name'];

//PROVAVELMENTE QUEBRA NO PONTO
$ext = strchr($arquivo['name'],'.');

//LISTA TODOS OS VETERINARIOS...
$resultado = $funcoes->listarTodos();

//SE A IMAGEM ESTIVER VAZIA ELE CARREGA A IMAGEM PADRAO
if(empty($imagem)){
	$imagem = "1.jpg";
}

//SETA A IMAGEM DO VETERINARIO
$veterinario->setImgVet($imagem);

//SETA A DESCRIÇAO DO VETERINARIO
$veterinario->setDescricao(isset($_POST['descricao'])?$_POST['descricao']:""); 

//SETA O NOME O VETERINARIO
$veterinario->setNome(isset($_POST['nome'])?$_POST['nome']:"");

//SETA O COD
$veterinario->setCod(""); 

//MOVE A IMAGEM PARA A PASTA PADRAO CASO SETADA
if(!empty($arquivo)){
	move_uploaded_file($arquivo_tmp, $destino.$arquivo['name']);	
}

//INSERE SE O RESULTADO NAO FOR NULO
if(empty($resultado)){
	$funcoes->inserir($veterinario);
	header("location:cadVet.php");
}

//ATUALIZA O VETERINARIO
else{
	$veterinarioBanco = $resultado[0];
	$veterinario->setCod($veterinarioBanco['cod']); 
	$funcoes->atualizar($veterinario);
	header("location:cadVet.php");
}



?>