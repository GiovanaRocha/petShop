<?php
include_once("include_dao.php");
$funcoes = new ProdutoDAO();
$produto = new Produto();

if(isset($_POST['salvar'])){
	if(isset($_FILES['foto']['name']))
	{
		$foto = $_FILES['foto'];
		$nomeTipo = explode(".", $foto['name']);
		
		$nomeFoto = $nomeTipo[0];
		$tipo = $nomeTipo[1];
		$nomeFoto = md5($nomeFoto);
		$novoNome = $nomeFoto.".".$tipo;
		$destino = 'img/gr/';
		move_uploaded_file($foto['tmp_name'], $destino.$novoNome);	
	}
	else
	{
		$novoNome = "";	
	}
	$produto->setNome(isset($_POST['nome'])?$_POST['nome']:""); 
	$produto->setDescricao(isset($_POST['descricao'])?$_POST['descricao']:""); 
	$produto->setPreco(isset($_POST['preco'])?$_POST['preco']:"");  
	$produto->setImg($novoNome); 
	$funcoes->inserir($produto);
	header("location:listarProdutos.php");
}


?>