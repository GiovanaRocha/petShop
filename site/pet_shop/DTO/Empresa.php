<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Empresa{
		//Atributos
		private $estado;
 		private $bairro;
 		private $cidade;
 		private $cep;
 		private $rua;
 		private $numero;
 		private $cod;
 		private $logo;
 		private $imgAdc;
 		private $imgLogo;
 		private $cnpj;
 		private $login;
 		private $senha;
 				
		//Métodos Getters e Setters
		public function getEstado(){
			return $this->estado;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getCod(){
			return $this->cod;
		}
		public function getLogo(){
			return $this->logo;
		}
		public function getImgAdc(){
			return $this->imgAdc;
		}
		public function getImgLogo(){
			return $this->imgLogo;
		}
		public function getCnpj(){
			return $this->cnpj;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}
		
		public function setEstado($estado){
			$this->estado=$estado;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setLogo($logo){
			$this->logo=$logo;
		}
		public function setImgAdc($imgAdc){
			$this->imgAdc=$imgAdc;
		}
		public function setImgLogo($imgLogo){
			$this->imgLogo=$imgLogo;
		}
		public function setCnpj($cnpj){
			$this->cnpj=$cnpj;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		
	}
?>