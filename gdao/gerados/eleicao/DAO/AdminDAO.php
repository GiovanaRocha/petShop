<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class AdminDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM admin WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM admin';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM admin ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM admin WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($admin){
		include("conexao.php");
		$sql = 'INSERT INTO admin (senha, login, cod) VALUES (:senha, :login, :cod)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':senha',$admin->getSenha()); 
		$consulta->bindValue(':login',$admin->getLogin()); 
		$consulta->bindValue(':cod',$admin->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($admin){
		include("conexao.php");
		$sql = 'UPDATE admin SET senha = :senha, login = :login, cod = :cod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':senha',$admin->getSenha()); 
		$consulta->bindValue(':login',$admin->getLogin()); 
		$consulta->bindValue(':cod',$admin->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM admin';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>