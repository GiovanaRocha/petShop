<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Aluno{
		//Atributos
		private $cod;
 		private $matricula;
 		private $nome;
 		private $data;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getMatricula(){
			return $this->matricula;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getData(){
			return $this->data;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setMatricula($matricula){
			$this->matricula=$matricula;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setData($data){
			$this->data=$data;
		}
		
	}
?>