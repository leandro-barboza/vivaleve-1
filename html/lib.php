<?php
	include_once('../DB/factory.php');
	class Table{
		private $tname;				//Nome da tabela no banco de dados
		private $query;				//Query para buscar os dados no db
		private $class = array();	//Array com as classes css da tabela
		private $data = array();	//Array onde serão armazenados os dados da consulta
		public function __construct($tname, $baseclass = "table"){
			$this->tname = $tname;
			$this->$class[0] = $baseclass;
			$c = getConn();
			$this->data = $c->query("SELECT * FROM " . $tname . ";");
			$this->data = mysqli_fetch_all($this->data, MYSQLI_ASSOC);
		}
		public function write(){
			$htmltab = '<table class = "table table-striped" ><tr>';
			foreach ($this->data[0] as $key => $value){
				$htmltab .= '<th>' . $key . '</th>';
			}
			$htmltab .= '</tr>';
			foreach($this->data as $da){
				$htmltab .= '<tr>';
				foreach($da as $d){
					$htmltab .= '<td>' . $d . '</td>';
				}
				$htmltab .= '</tr>';
			}
			$htmltab .= '</table>';
			echo $htmltab;
		}
	}
?>