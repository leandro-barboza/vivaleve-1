<?php
	class Programa_emagrecimento{
		private $id;
		private $nome;
		private $descricao;
		private $imagem;
		public function __construct($nome, $descricao, $imagem, $id = NULL){
			$this->id = $id;
			$this->nome	= $nome;
			$this->descricao = $descricao;
			$this->imagem = $imagem;
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

		public function getImagem(){
			return $this->imagem;
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

		public function setImagem($imagem){
			$this->imagem = $imagem;
		}
	}
?>