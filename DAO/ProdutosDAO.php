<?php
	include_once('../Classes/Produtos.php');
	include_once('../DB/factory.php');
	class ProdutosDAO{
		public static function create($produtos){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO produtos (texto) VALUES (?);");
			$stmt->bind_param("s", $produtos->getTexto());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM produtos;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update(){
			$c = getConn();
			$stmt = $c->prepare("UPDATE produtos SET texto = ? WHERE id = ?;");
			$stmt->bind_param("si", $produtos->getTexto(), $produtos->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($produtos){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM produtos WHERE id = ?;");
			$stmt->bind_param("i", $produtos->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>