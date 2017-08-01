<?php
	include_once('../Classes/Plano.php');
	include_once('../DB/factory.php');
	class PlanoDAO{
		public static function create($plano){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO plano (nome, descricao, cor) VALUES (?, ?, ?);");
			$stmt->bind_param("ssi", $plano->getNome(), $plano->getDescricao(), $plano->getCor());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM plano;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update(){
			$c = getConn();
			$stmt = $c->prepare("UPDATE plano SET nome = ?, descricao = ?, cor = ? WHERE id = ?;");
			$stmt->bind_param("ssii", $plano->getNome(), $plano->getDescricao(), $plano->getCor(), $plano->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($plano){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM plano WHERE id = ?;");
			$stmt->bind_param("i", $plano->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>