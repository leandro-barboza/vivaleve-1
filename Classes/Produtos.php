<?php
	class Produtos{
		private $id;
		private $texto;
		public function __construct($texto, $id = NULL){
			$this->id = $id;
			$this->texto = $texto;
		}
		public function getId(){
			return $this->id;
		}

		public function getTexto(){
			return $this->texto;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setTexto($texto){
			$this->texto = $texto;
		}

	}
?>