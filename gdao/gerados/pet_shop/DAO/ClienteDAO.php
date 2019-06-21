<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ClienteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente){
		include("conexao.php");
		$sql = 'INSERT INTO cliente (cod, estado, cidade, bairro, rua, cep, num, telefone, nome, rg) VALUES (:cod, :estado, :cidade, :bairro, :rua, :cep, :num, :telefone, :nome, :rg)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 
		$consulta->bindValue(':estado',$cliente->getEstado()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':rua',$cliente->getRua()); 
		$consulta->bindValue(':cep',$cliente->getCep()); 
		$consulta->bindValue(':num',$cliente->getNum()); 
		$consulta->bindValue(':telefone',$cliente->getTelefone()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':rg',$cliente->getRg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("conexao.php");
		$sql = 'UPDATE cliente SET cod = :cod, estado = :estado, cidade = :cidade, bairro = :bairro, rua = :rua, cep = :cep, num = :num, telefone = :telefone, nome = :nome, rg = :rg WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 
		$consulta->bindValue(':estado',$cliente->getEstado()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':rua',$cliente->getRua()); 
		$consulta->bindValue(':cep',$cliente->getCep()); 
		$consulta->bindValue(':num',$cliente->getNum()); 
		$consulta->bindValue(':telefone',$cliente->getTelefone()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':rg',$cliente->getRg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>