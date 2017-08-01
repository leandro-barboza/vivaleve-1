<?php
	class Fixos_texto_pagina{
		private $id;
		private $pagina;
		private $nome_campo;
		private $valor;
		public function __construct($pagina, $nome_campo, $valor, $id = NULL){
			$this->id = $id;
			$this->pagina = $pagina;
			$this->nome_campo = $nome_campo;
			$this->valor = $valor;
		}

		public function getPagina(){
			return $this->pagina;
		}

		public function getNome_campo(){
			return $this->nome_campo;
		}

		public function getValor(){
			return $this->valor;
		}

		public function getId(){
			return $this->id;
		}

		public function setPagina($pagina){
			$this->pagina = $pagina;
		}

		public function setNome_campo($nome_campo){
			$this->nome_campo = $nome_campo;
		}

		public function setValor($valor){
			$this->valor = $valor;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>