<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pet_veterinario{
		//Atributos
		private $hora;
 		private $cod_pet;
 		private $cod_veterinario;
 		private $cod;
 		private $data;
 				
		//Métodos Getters e Setters
		public function getHora(){
			return $this->hora;
		}
		public function getCod_pet(){
			return $this->cod_pet;
		}
		public function getCod_veterinario(){
			return $this->cod_veterinario;
		}
		public function getCod(){
			return $this->cod;
		}
		public function getData(){
			return $this->data;
		}
		
		public function setHora($hora){
			$this->hora=$hora;
		}
		public function setCod_pet($cod_pet){
			$this->cod_pet=$cod_pet;
		}
		public function setCod_veterinario($cod_veterinario){
			$this->cod_veterinario=$cod_veterinario;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setData($data){
			$this->data=$data;
		}
		
	}
?>