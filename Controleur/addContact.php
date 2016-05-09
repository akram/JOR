<?php

//add a capteur with the specified values in the database

session_start();
if(!isset($_SESSION['user'])){
	header('location: index.php');
}

include 'BddConnexion.php';



$mail=$_POST['mail'];
$name=$_POST['Name'];
$first_name=$_POST['First_Name'];
$tel=$_POST['tel'];

// $mail='a';
// $name='a';
// $first_name='a';
// $tel='a';


$conn = new BddConnexion(); 
$conn ->connect();
$bdd= $conn->get_bdd();



$req = $bdd->prepare('INSERT INTO directory (user_mail,name,first_name,mail,telephone) VALUES(:user_mail,:name,:first_name,:mail,:telephone)');

try{
$req->execute(array(
	'mail' => $mail,
	'name' => $name,
	'first_name' => $first_name,
	'telephone' => $tel,
	'user_mail' => $_SESSION['user']
	));	

}
catch(Exception $e){
	echo "Probleme: ", $e->getMessage();
	die();
}



?>