<?php
	class Fixos_imagem_pagina{
		private $id;
		private $pagina;
		private $nome_campo;
		private $src;
		private $legenda;
		public function __construct($pagina, $nome_campo, $src, $legenda, $id = NULL){
			$this->id = $id;
			$this->pagina = $pagina;
			$this->nome_campo = $nome_campo;
			$this->src = $src;
			$this->legenda = $legenda;
		}

		public function getPagina(){
			return $this->pagina;
		}

		public function getNome_campo(){
			return $this->nome_campo;
		}

		public function getSrc(){
			return $this->src;
		}

		public function getLegenda(){
			return $this->legenda;
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

		public function setSrc($src){
			$this->src = $src;
		}

		public function setLegenda($legenda){
			$this->legenda = $legenda;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>