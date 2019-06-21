<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Aluno_chapa{
		//Atributos
		private $cod;
 		private $cod_aluno;
 		private $cod_chapa;
 		private $funcao;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getCod_aluno(){
			return $this->cod_aluno;
		}
		public function getCod_chapa(){
			return $this->cod_chapa;
		}
		public function getFuncao(){
			return $this->funcao;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setCod_aluno($cod_aluno){
			$this->cod_aluno=$cod_aluno;
		}
		public function setCod_chapa($cod_chapa){
			$this->cod_chapa=$cod_chapa;
		}
		public function setFuncao($funcao){
			$this->funcao=$funcao;
		}
		
	}
?>