<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Servico{
		//Atributos
		private $cod;
 		private $preco;
 		private $descricao;
 		private $tipo;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getTipo(){
			return $this->tipo;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		
	}
?>