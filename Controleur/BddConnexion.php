<?php 
//handle the connection to the database
class BddConnexion{

private $bdd;


	function connect(){
 try { 
$dbName = 'poc'; 
$host = 'database'; 
$utilisateur = 'root';
 $motDePasse = $_ENV["MYSQL_PASSWORD"];
$dns = 'mysql:host='.$host .';dbname='.$dbName.';';
 $this->bdd = new PDO( $dns, $utilisateur, $motDePasse ); 
$this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch ( Exception $e )
 {
 echo "Connection à la BDD impossible : ", $e->getMessage(); die();
 }
}

function get_bdd(){ 
return $this->bdd; 
}

}



?>
