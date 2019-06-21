<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $cod;
 		private $nome;
 		private $descricao;
 		private $preco;
 		private $imagem;
 		private $principal;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function getImagem(){
			return $this->imagem;
		}
		public function getPrincipal(){
			return $this->principal;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		public function setImagem($imagem){
			$this->imagem=$imagem;
		}
		public function setPrincipal($principal){
			$this->principal=$principal;
		}
		
	}
?>