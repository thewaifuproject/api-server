<?php
function connectDB(){
	$servidor = "localhost"; $usuari = "root"; $clau = "123456";
	try{
		$connexio = new PDO("mysql:host=$servidor;dbname=waifus;charset=UTF8", $usuari, $clau);
		$connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	return($connexio);
}
?> 
