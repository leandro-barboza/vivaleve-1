<?php
	class Parceiro{
		private $id;
		private $nome;
		private $link;
		private $logo;
		public function __construct($nome, $link, $logo, $id = NULL){
			$this->id = $id;
			$this->nome	= $nome;
			$this->link = $link;
			$this->logo = $logo;
		}
		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getLink(){
			return $this->link;
		}

		public function getLogo(){
			return $this->logo;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setLink($link){
			$this->link = $link;
		}

		public function setLogo($logo){
			$this->logo = $logo;
		}
	}
?>