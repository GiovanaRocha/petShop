<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class VotacaoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM votacao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM votacao';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM votacao ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM votacao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($votacao){
		include("conexao.php");
		$sql = 'INSERT INTO votacao (cod, cod_chapa, cod_aluno) VALUES (:cod, :cod_chapa, :cod_aluno)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$votacao->getCod()); 
		$consulta->bindValue(':cod_chapa',$votacao->getCod_chapa()); 
		$consulta->bindValue(':cod_aluno',$votacao->getCod_aluno()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($votacao){
		include("conexao.php");
		$sql = 'UPDATE votacao SET cod = :cod, cod_chapa = :cod_chapa, cod_aluno = :cod_aluno WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$votacao->getCod()); 
		$consulta->bindValue(':cod_chapa',$votacao->getCod_chapa()); 
		$consulta->bindValue(':cod_aluno',$votacao->getCod_aluno()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM votacao';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>