<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class VeterinarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM veterinario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM veterinario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM veterinario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM veterinario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($veterinario){
		include("conexao.php");
		$sql = 'INSERT INTO veterinario (nome, descricao, cod, imgVet) VALUES (:nome, :descricao, :cod, :imgVet)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$veterinario->getNome()); 
		$consulta->bindValue(':descricao',$veterinario->getDescricao()); 
		$consulta->bindValue(':cod',$veterinario->getCod()); 
		$consulta->bindValue(':imgVet',$veterinario->getImgVet()); 

		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($veterinario){
		include("conexao.php");
		$sql = 'UPDATE veterinario SET nome = :nome, descricao = :descricao, cod = :cod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$veterinario->getNome()); 
		$consulta->bindValue(':descricao',$veterinario->getDescricao()); 
		$consulta->bindValue(':cod',$veterinario->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM veterinario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>