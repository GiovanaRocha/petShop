<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $cod;
 		private $img;
 		private $nome;
 		private $preco;
 		private $descricao;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getImg(){
			return $this->img;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setImg($img){
			$this->img=$img;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		
	}
?>