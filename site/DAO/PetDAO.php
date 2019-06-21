<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class PetDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM pet WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pet';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pet ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM pet WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($pet){
		include("conexao.php");
		$sql = 'INSERT INTO pet (cod, idade, peso, nome, raca, cod_cliente) VALUES (:cod, :idade, :peso, :nome, :raca, :cod_cliente)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$pet->getCod()); 
		$consulta->bindValue(':idade',$pet->getIdade()); 
		$consulta->bindValue(':peso',$pet->getPeso()); 
		$consulta->bindValue(':nome',$pet->getNome()); 
		$consulta->bindValue(':raca',$pet->getRaca()); 
		$consulta->bindValue(':cod_cliente',$pet->getCod_cliente()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($pet){
		include("conexao.php");
		$sql = 'UPDATE pet SET cod = :cod, idade = :idade, peso = :peso, nome = :nome, raca = :raca, cod_cliente = :cod_cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$pet->getCod()); 
		$consulta->bindValue(':idade',$pet->getIdade()); 
		$consulta->bindValue(':peso',$pet->getPeso()); 
		$consulta->bindValue(':nome',$pet->getNome()); 
		$consulta->bindValue(':raca',$pet->getRaca()); 
		$consulta->bindValue(':cod_cliente',$pet->getCod_cliente()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pet';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>