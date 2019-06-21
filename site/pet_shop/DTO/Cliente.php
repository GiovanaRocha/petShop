<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $cod;
 		private $estado;
 		private $cidade;
 		private $bairro;
 		private $rua;
 		private $cep;
 		private $num;
 		private $telefone;
 		private $nome;
 		private $rg;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getNum(){
			return $this->num;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getRg(){
			return $this->rg;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setEstado($estado){
			$this->estado=$estado;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setNum($num){
			$this->num=$num;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setRg($rg){
			$this->rg=$rg;
		}
		
	}
?>