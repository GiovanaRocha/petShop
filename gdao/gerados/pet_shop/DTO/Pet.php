<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pet{
		//Atributos
		private $cod;
 		private $idade;
 		private $peso;
 		private $nome;
 		private $raca;
 		private $cod_cliente;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getRaca(){
			return $this->raca;
		}
		public function getCod_cliente(){
			return $this->cod_cliente;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setIdade($idade){
			$this->idade=$idade;
		}
		public function setPeso($peso){
			$this->peso=$peso;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setRaca($raca){
			$this->raca=$raca;
		}
		public function setCod_cliente($cod_cliente){
			$this->cod_cliente=$cod_cliente;
		}
		
	}
?>