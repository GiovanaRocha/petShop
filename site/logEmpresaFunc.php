<?php
include_once("include_dao.php");

$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
$destino = 'img/bg/';
$imagem = isset($_FILES['arquivo']['name'])?$_FILES['arquivo']['name']:"";

$arquivo_tmp = $arquivo['tmp_name'];
$ext = strchr($arquivo['name'],'.');
$funcoes = new EmpresaDAO();
$empresa = new Empresa();

$resultado = $funcoes->listarTodos();
if(empty($imagem)){
	$imagem = "header-bg.jpg";
}

$empresa->setEstado(""); 
$empresa->setBairro(""); 
$empresa->setCidade(""); 
$empresa->setCep(""); 
$empresa->setRua(isset($_POST['endereco'])?$_POST['endereco']:""); 
$empresa->setNumero(isset($_POST['tel'])?$_POST['tel']:""); 
$empresa->setCod(""); 
$empresa->setLogo(""); 
$empresa->setImgAdc(""); 
$empresa->setImgLogo($imagem); 
$empresa->setCnpj(""); 
$empresa->setLogin(isset($_POST['email'])?$_POST['email']:""); 
$empresa->setSenha(isset($_POST['senha'])?$_POST['senha']:""); 
$empresa->setNome(isset($_POST['nome'])?$_POST['nome']:"");
$empresa->setCod(""); 
if(!empty($arquivo)){
	move_uploaded_file($arquivo_tmp, $destino.$arquivo['name']);	
}
if(empty($resultado)){
	$funcoes->inserir($empresa);
	header("location:logEmpresa.php");
}
else{
	$empresaBanco = $resultado[0];
	$empresa->setCod($empresaBanco['cod']); 
	$funcoes->atualizar($empresa);
	header("location:logEmpresa.php");
}



?>