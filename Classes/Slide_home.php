<?php
	class Slide_home{
		private $id;
		private $imagem_grande;
		private $imagem_pequena;
		private $texto_grande;
		private $texto_pequeno;
		private $link;
		public function __construct($imagem_grande, $imagem_pequena, $texto_grande, $texto_pequeno, $link, $id = NULL){
			$this->id = $id;
			$this->imagem_grande = $imagem_grande;
			$this->link = $link;
			$this->imagem_pequena = $imagem_pequena;
			$this->texto_grande = $texto_grande;
			$this->texto_pequeno = $texto_pequeno;
		}
		public function getId(){
			return $this->id;
		}

		public function getImagem_grande(){
			return $this->imagem_grande;
		}

		public function getTexto_grande(){
			return $this->texto_grande;
		}

		public function getTexto_pequeno(){
			return $this->texto_pequeno;
		}

		public function getLink(){
			return $this->link;
		}

		public function getImagem_pequena(){
			return $this->imagem_pequena;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setImagem_grande($imagem_grande){
			$this->imagem_grande = $imagem_grande;
		}

		public function setTexto_grande($texto_grande){
			$this->texto_grande = $texto_grande;
		}

		public function setTexto_pequeno($texto_pequeno){
			$this->texto_pequeno = $texto_pequeno;
		}

		public function setLink($link){
			$this->link = $link;
		}

		public function setImagem_pequena($imagem_pequena){
			$this->imagem_pequena = $imagem_pequena;
		}
	}
?>