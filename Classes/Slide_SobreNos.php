<?php
	class Slide_SobreNos{
		private $id;
		private $imagem;
		private $legenda;
		public function __construct($imagem, $legenda, $id = NULL){
			$this->id = $id;
			$this->legenda = $legenda;
			$this->imagem = $imagem;
		}
		public function getId(){
			return $this->id;
		}

		public function getLegenda(){
			return $this->legenda;
		}

		public function getImagem(){
			return $this->imagem;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setLegenda($legenda){
			$this->legenda = $legenda;
		}

		public function setImagem($imagem){
			$this->imagem = $imagem;
		}
	}
?>