<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class Aluno_chapaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno_chapa WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno_chapa';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno_chapa ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM aluno_chapa WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($aluno_chapa){
		include("conexao.php");
		$sql = 'INSERT INTO aluno_chapa (cod, cod_aluno, cod_chapa, funcao) VALUES (:cod, :cod_aluno, :cod_chapa, :funcao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$aluno_chapa->getCod()); 
		$consulta->bindValue(':cod_aluno',$aluno_chapa->getCod_aluno()); 
		$consulta->bindValue(':cod_chapa',$aluno_chapa->getCod_chapa()); 
		$consulta->bindValue(':funcao',$aluno_chapa->getFuncao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($aluno_chapa){
		include("conexao.php");
		$sql = 'UPDATE aluno_chapa SET cod = :cod, cod_aluno = :cod_aluno, cod_chapa = :cod_chapa, funcao = :funcao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$aluno_chapa->getCod()); 
		$consulta->bindValue(':cod_aluno',$aluno_chapa->getCod_aluno()); 
		$consulta->bindValue(':cod_chapa',$aluno_chapa->getCod_chapa()); 
		$consulta->bindValue(':funcao',$aluno_chapa->getFuncao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM aluno_chapa';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>