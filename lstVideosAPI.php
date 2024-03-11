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
		while( ($row = $stmt->fetch()) ){
			//echo '<tr><td><a href="' . $row["Link"] . '">' . $row["Descri"] . '</a></td></tr>';
			echo '"' . $row["Link"] . '";"' . $row["Descri"] . '"\n';
			}
		//echo "</table>";
		} catch (PDOException $e) {
		echo $e->getMessage();
		}
?>