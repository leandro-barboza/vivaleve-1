<?php
	class Produto_Plano{
		private $cod_produto;
		private $cod_plano;
		public function __construct($cod_produto, $cod_plano){
			$this->cod_produto = $cod_produto;
			$this->cod_plano = $cod_plano;
		}
		public function getCod_produto(){
			return $this->cod_produto;
		}

		public function getCod_plano(){
			return $this->cod_plano;
		}

		public function setCod_produto($cod_produto){
			$this->cod_produto = $cod_produto;
		}

		public function setCod_plano($cod_plano){
			$this->cod_plano = $cod_plano;
		}

	}
?>