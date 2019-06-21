<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Votacao{
		//Atributos
		private $cod;
 		private $cod_chapa;
 		private $cod_aluno;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getCod_chapa(){
			return $this->cod_chapa;
		}
		public function getCod_aluno(){
			return $this->cod_aluno;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setCod_chapa($cod_chapa){
			$this->cod_chapa=$cod_chapa;
		}
		public function setCod_aluno($cod_aluno){
			$this->cod_aluno=$cod_aluno;
		}
		
	}
?>