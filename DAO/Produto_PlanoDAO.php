<?php
	include_once('../Classes/Produto_Plano.php');
	include_once('../DB/factory.php');
	class Produto_PlanoDAO{
		public static function create($Produto_Plano){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO produtos_planos (cod_produto, cod_plano) VALUES (?, ?);");
			$stmt->bind_param("ii", $Produto_Plano->getCod_produto(), $Produto_Plano->getCod_plano());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM plano;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			foreach ($data as $key => $value) {
				$c = getConn();
				$produtos = $c->query("SELECT produtos.* FROM produtos_planos join produtos on (produtos_planos.cod_produto = produtos.id) WHERE produtos_planos.cod_plano = " . $value['id'] . ";");
				$produtos = mysqli_fetch_all($produtos, MYSQLI_ASSOC);
				$data[$key] = array("Id" => $value['id'], "Nome" => $value['nome'], "Descricao" => $value['descricao'], "Cor" => $value['cor'], "Produtos" => $produtos);
			}
			return $data;
		}

		public static function read($identifier, $value){
			$c = getConn();
			$data = $c->query("SELECT * FROM produtos_planos;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;	

		}

		public static function delete($Produto_Plano){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM produtos_planos WHERE cod_produto = ? AND cod_plano = ? ;");
			$stmt->bind_param("ii", $Produto_Plano->getCod_produto(), $Produto_Plano->getCod_plano());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>