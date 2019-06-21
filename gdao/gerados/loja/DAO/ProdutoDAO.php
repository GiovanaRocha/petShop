<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ProdutoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM produto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM produto';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM produto ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM produto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($produto){
		include("conexao.php");
		$sql = 'INSERT INTO produto (cod, nome, descricao, preco, imagem, principal) VALUES (:cod, :nome, :descricao, :preco, :imagem, :principal)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':descricao',$produto->getDescricao()); 
		$consulta->bindValue(':preco',$produto->getPreco()); 
		$consulta->bindValue(':imagem',$produto->getImagem()); 
		$consulta->bindValue(':principal',$produto->getPrincipal()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($produto){
		include("conexao.php");
		$sql = 'UPDATE produto SET cod = :cod, nome = :nome, descricao = :descricao, preco = :preco, imagem = :imagem, principal = :principal WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':descricao',$produto->getDescricao()); 
		$consulta->bindValue(':preco',$produto->getPreco()); 
		$consulta->bindValue(':imagem',$produto->getImagem()); 
		$consulta->bindValue(':principal',$produto->getPrincipal()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM produto';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>