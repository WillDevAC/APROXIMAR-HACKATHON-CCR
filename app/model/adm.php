<?php 
	use Radio\Database\Connection;
	/**
	 * Classe responsavel por funções administrativas do app 
	 */
	class Adm
	{
	public static function selecionaDados()
		{
			$conn = Connection::getConn();
			$sql = "SELECT * FROM usuarios WHERE id='1'";
			$sql = $conn->prepare($sql);
			$sql->execute();

			$result = array();

			while ($row = $sql->fetchObject('Adm')) {
				$result[] = $row;
			}
			return $result;
		}
	}

 ?>