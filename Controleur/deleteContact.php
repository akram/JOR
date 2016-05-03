<?php

//add a capteur with the specified values in the database

session_start();
if(!isset($_SESSION['user'])){
	header('location: index.php');
}

include 'BddConnexion.php';

$conn = new BddConnexion(); 
$conn ->connect();
$bdd= $conn->get_bdd();


$id=$_GET["id"];

$req = $bdd->prepare('DELETE FROM directory where id = :id');

		try{
$req->execute(array(
	'id' => $id
	
	));	

}
		catch(Exception $e){
	echo "Probleme: ", $e->getMessage();
	die();
}
header('location: ../Vue/contacts.php');
?>