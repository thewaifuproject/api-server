<?php

function getWaifu($connexio, $waifuId){
	try{
	
		$SQL = "SELECT * FROM waifus WHERE id = ':waifuId'";
		$consulta = $connexio->prepare($SQL);
		$consulta->bindParam(":waifuId", $waifuId, PDO::PARAM_INT);
		$consulta->execute();

		$waifu = $consulta->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage(); 
	}
	return($waifu);
}

?>
