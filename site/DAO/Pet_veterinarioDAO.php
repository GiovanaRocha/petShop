<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class Pet_veterinarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_veterinario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_veterinario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_veterinario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM pet_veterinario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($pet_veterinario){
		include("conexao.php");
		$sql = 'INSERT INTO pet_veterinario (hora, cod_pet, cod_veterinario, cod, data) VALUES (:hora, :cod_pet, :cod_veterinario, :cod, :data)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':hora',$pet_veterinario->getHora()); 
		$consulta->bindValue(':cod_pet',$pet_veterinario->getCod_pet()); 
		$consulta->bindValue(':cod_veterinario',$pet_veterinario->getCod_veterinario()); 
		$consulta->bindValue(':cod',$pet_veterinario->getCod()); 
		$consulta->bindValue(':data',$pet_veterinario->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($pet_veterinario){
		include("conexao.php");
		$sql = 'UPDATE pet_veterinario SET hora = :hora, cod_pet = :cod_pet, cod_veterinario = :cod_veterinario, cod = :cod, data = :data WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':hora',$pet_veterinario->getHora()); 
		$consulta->bindValue(':cod_pet',$pet_veterinario->getCod_pet()); 
		$consulta->bindValue(':cod_veterinario',$pet_veterinario->getCod_veterinario()); 
		$consulta->bindValue(':cod',$pet_veterinario->getCod()); 
		$consulta->bindValue(':data',$pet_veterinario->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pet_veterinario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>