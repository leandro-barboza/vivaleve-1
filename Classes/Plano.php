<?php
	class Plano{
		private $id;
		private $nome;
		private $descricao;
		private $cor;
		public function __construct($nome, $descricao, $cor, $id = NULL){
			$this->id = $id;
			$this->nome	= $nome;
			$this->descricao = $descricao;
			$this->cor = $cor;
		}
		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getCor(){
			return $this->cor;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function setCor($cor){
			$this->cor = $cor;
		}
	}
?>