<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pet_servico{
		//Atributos
		private $data;
 		private $hora;
 		private $cod_servico;
 		private $cod_pet;
 		private $cod;
 				
		//Métodos Getters e Setters
		public function getData(){
			return $this->data;
		}
		public function getHora(){
			return $this->hora;
		}
		public function getCod_servico(){
			return $this->cod_servico;
		}
		public function getCod_pet(){
			return $this->cod_pet;
		}
		public function getCod(){
			return $this->cod;
		}
		
		public function setData($data){
			$this->data=$data;
		}
		public function setHora($hora){
			$this->hora=$hora;
		}
		public function setCod_servico($cod_servico){
			$this->cod_servico=$cod_servico;
		}
		public function setCod_pet($cod_pet){
			$this->cod_pet=$cod_pet;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		
	}
?>