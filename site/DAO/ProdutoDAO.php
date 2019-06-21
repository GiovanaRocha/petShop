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
		$sql = 'INSERT INTO produto (cod, img, nome, preco, descricao) VALUES (:cod, :img, :nome, :preco, :descricao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':img',$produto->getImg()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':preco',$produto->getPreco()); 
		$consulta->bindValue(':descricao',$produto->getDescricao());
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($produto){
		include("conexao.php");
		$sql = 'UPDATE produto SET nome = :nome, preco = :preco, descricao = :descricao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		echo $produto->getCod();
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':preco',$produto->getPreco()); 
		$consulta->bindValue(':descricao',$produto->getDescricao()); 
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