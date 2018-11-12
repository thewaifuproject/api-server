<?php
/*function connectDB(){
$servidor = "localhost"; $usuari = "tdiw-k1"; $clau = "B7UnQW9R";
try{
$connexio = new PDO("mysql:host=$servidor;dbname=tdiwk1;charset=UTF8", $usuari, $clau);
$connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
return($connexio);
}*/

function connectDB()
{
    $databaseUser = 'tdiw-k1';
    $databasePassword = 'B7UnQW9R';

    $conexion=NULL;
   try
   {
      $conexion=new PDO("mysql:host=localhost; dbname=tdiw-k1; charset=UTF8", $databaseUser,$databasePassword);
      $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
   }catch (PDOExeption $e)
   {
      echo "ERROR: " .$e->getMessage();
   }
   return $conexion;
}
?> 
