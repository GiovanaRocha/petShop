<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Admin{
		//Atributos
		private $senha;
 		private $login;
 		private $cod;
 				
		//Métodos Getters e Setters
		public function getSenha(){
			return $this->senha;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getCod(){
			return $this->cod;
		}
		
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		
	}
?>