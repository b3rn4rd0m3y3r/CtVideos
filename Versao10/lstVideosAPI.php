<?php
	// Separamos a conexão para poder usar mais vezes
	include "sqliteCon.php";
	// Constrói o SQL, ligando logicamente ao parâmetro
	$sql = "SELECT * FROM tbVideos ";
	// Bloco com previsão de exceção
	try{
		$stmt = $conn->prepare($sql);
		$res = $stmt->execute();
		//echo "<table border=1 cellspacing=0 cellpadding=4>";
		$S = "";
		while( ($row = $stmt->fetch()) ){
			//echo '<tr><td><a href="' . $row["Link"] . '">' . $row["Descri"] . '</a></td></tr>';
			//echo '"' . $row["Link"] . '" ; "' . $row["Descri"] . '" \n ';
			//echo '' . $row["Link"] . ' ; ' . $row["Descri"] . ' \n ';
			// PARA FUNCIONAR COM AS LISTAS AI2, 
			// O SEPARADOR DE CAMPO DEVE SER VÍRGULA
			//$S .= '["' . $row["Link"] . '" , "' . $row["Descri"] . '"],';
			$S .= '' . $row["Link"] . ' , ' . $row["Descri"] . ',';
			}
		$S = substr($S,0,strlen($S)-1);
		$S .= "";
		echo $S;
		//echo "</table>";
		} catch (PDOException $e) {
		echo $e->getMessage();
		}
?>