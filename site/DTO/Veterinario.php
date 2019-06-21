<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Veterinario{
		//Atributos
		private $nome;
 		private $descricao;
 		private $cod;
 		private $imgVet;
 				
		//Métodos Getters e Setters
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getCod(){
			return $this->cod;
		}
		public function getImgVet(){
			return $this->imgVet;
		}
		
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setImgVet($imgVet){
			$this->imgVet=$imgVet;
		}
	}
?>