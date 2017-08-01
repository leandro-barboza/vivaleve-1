<?php
	class Servico{
		private $id;
		private $nome;
		private $texto_principal;
		private $imagem_principal;
		private $texto_portfolio;
		private $imagem_portfolio;
		public function __construct($nome, $texto_principal, $imagem_principal, $texto_portfolio, $imagem_portfolio, $id = NULL){
			$this->id = $id;
			$this->nome	= $nome;
			$this->texto_principal = $texto_principal;
			$this->imagem_principal = $imagem_principal;
			$this->texto_portfolio = $texto_portfolio;
			$this->imagem_portfolio = $imagem_portfolio;
		}
		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getTexto_principal(){
			return $this->texto_principal;
		}

		public function getImagem_principal(){
			return $this->imagem_principal;
		}

		public function getTexto_portfolio(){
			return $this->texto_portfolio;
		}

		public function getImagem_portfolio(){
			return $this->imagem_portfolio;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setTexto_principal($texto_principal){
			$this->texto_principal = $texto_principal;
		}

		public function setImagem_principal($imagem_principal){
			$this->imagem_principal = $imagem_principal;
		}

		public function setTexto_portfolio($texto_portfolio){
			$this->texto_portfolio = $texto_portfolio;
		}

		public function setImagem_portfolio($imagem_portfolio){
			$this->imagem_portfolio = $imagem_portfolio;
		}
	}
?>