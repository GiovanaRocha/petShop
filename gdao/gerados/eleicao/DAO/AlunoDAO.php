<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class AlunoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM aluno ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM aluno WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($aluno){
		include("conexao.php");
		$sql = 'INSERT INTO aluno (cod, matricula, nome, data) VALUES (:cod, :matricula, :nome, :data)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$aluno->getCod()); 
		$consulta->bindValue(':matricula',$aluno->getMatricula()); 
		$consulta->bindValue(':nome',$aluno->getNome()); 
		$consulta->bindValue(':data',$aluno->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($aluno){
		include("conexao.php");
		$sql = 'UPDATE aluno SET cod = :cod, matricula = :matricula, nome = :nome, data = :data WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$aluno->getCod()); 
		$consulta->bindValue(':matricula',$aluno->getMatricula()); 
		$consulta->bindValue(':nome',$aluno->getNome()); 
		$consulta->bindValue(':data',$aluno->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM aluno';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>