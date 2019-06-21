<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class Pet_servicoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_servico WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_servico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pet_servico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM pet_servico WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($pet_servico){
		include("conexao.php");
		$sql = 'INSERT INTO pet_servico (data, hora, cod_servico, cod_pet, cod) VALUES (:data, :hora, :cod_servico, :cod_pet, :cod)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':data',$pet_servico->getData()); 
		$consulta->bindValue(':hora',$pet_servico->getHora()); 
		$consulta->bindValue(':cod_servico',$pet_servico->getCod_servico()); 
		$consulta->bindValue(':cod_pet',$pet_servico->getCod_pet()); 
		$consulta->bindValue(':cod',$pet_servico->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($pet_servico){
		include("conexao.php");
		$sql = 'UPDATE pet_servico SET data = :data, hora = :hora, cod_servico = :cod_servico, cod_pet = :cod_pet, cod = :cod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':data',$pet_servico->getData()); 
		$consulta->bindValue(':hora',$pet_servico->getHora()); 
		$consulta->bindValue(':cod_servico',$pet_servico->getCod_servico()); 
		$consulta->bindValue(':cod_pet',$pet_servico->getCod_pet()); 
		$consulta->bindValue(':cod',$pet_servico->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pet_servico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>