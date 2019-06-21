<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class EmpresaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM empresa WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($empresa){
		include("conexao.php");
		$sql = 'INSERT INTO empresa (estado, bairro, cidade, cep, rua, numero, cod, logo, imgAdc, imgLogo, cnpj, login, senha) VALUES (:estado, :bairro, :cidade, :cep, :rua, :numero, :cod, :logo, :imgAdc, :imgLogo, :cnpj, :login, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':estado',$empresa->getEstado()); 
		$consulta->bindValue(':bairro',$empresa->getBairro()); 
		$consulta->bindValue(':cidade',$empresa->getCidade()); 
		$consulta->bindValue(':cep',$empresa->getCep()); 
		$consulta->bindValue(':rua',$empresa->getRua()); 
		$consulta->bindValue(':numero',$empresa->getNumero()); 
		$consulta->bindValue(':cod',$empresa->getCod()); 
		$consulta->bindValue(':logo',$empresa->getLogo()); 
		$consulta->bindValue(':imgAdc',$empresa->getImgAdc()); 
		$consulta->bindValue(':imgLogo',$empresa->getImgLogo()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':login',$empresa->getLogin()); 
		$consulta->bindValue(':senha',$empresa->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($empresa){
		include("conexao.php");
		$sql = 'UPDATE empresa SET estado = :estado, bairro = :bairro, cidade = :cidade, cep = :cep, rua = :rua, numero = :numero, cod = :cod, logo = :logo, imgAdc = :imgAdc, imgLogo = :imgLogo, cnpj = :cnpj, login = :login, senha = :senha WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':estado',$empresa->getEstado()); 
		$consulta->bindValue(':bairro',$empresa->getBairro()); 
		$consulta->bindValue(':cidade',$empresa->getCidade()); 
		$consulta->bindValue(':cep',$empresa->getCep()); 
		$consulta->bindValue(':rua',$empresa->getRua()); 
		$consulta->bindValue(':numero',$empresa->getNumero()); 
		$consulta->bindValue(':cod',$empresa->getCod()); 
		$consulta->bindValue(':logo',$empresa->getLogo()); 
		$consulta->bindValue(':imgAdc',$empresa->getImgAdc()); 
		$consulta->bindValue(':imgLogo',$empresa->getImgLogo()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':login',$empresa->getLogin()); 
		$consulta->bindValue(':senha',$empresa->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM empresa';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>