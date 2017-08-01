<?php
	include_once('../Classes/Slide_SobreNos.php');
	include_once('../DB/factory.php');
	class Slide_SobreNosDAO{
		public static function create($slide_SobreNos){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO slide_SobreNos (legenda, imagem) VALUES (?, ?);");
			$stmt->bind_param("ss", $slide_SobreNos->getLegenda(), $slide_SobreNos->getImagem());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM slide_SobreNos;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update($slide_SobreNos){
			$c = getConn();
			$stmt = $c->prepare("UPDATE slide_SobreNos SET legenda = ?, imagem = ? WHERE id = ?;");
			$stmt->bind_param("ssi", $slide_SobreNos->getLegenda(), $slide_SobreNos->getImagem(), $slide_SobreNos->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($slide_SobreNos){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM slide_SobreNos WHERE id = ?;");
			$stmt->bind_param("i", $slide_SobreNos->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>