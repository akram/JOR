<?php
session_start();

if(!isset($_SESSION['user'])){
	header('location: ../index.php');
}

include 'BddConnexion.php';


$conn = new BddConnexion(); 
$conn ->connect();
$bdd= $conn->get_bdd();


$mail=$_POST['user_id'];
$name=$_POST['Name'];
$first_name=$_POST['First_Name'];
$password=$_POST['password'];
$tel=$_POST['tel'];

if (isset($_REQUEST['Register'])) 
{

	
	
		$req = $bdd->prepare('SELECT * from user where mail = :mail');

		try{
$req->execute(array(
	'mail' => $mail
	
	));	

}
		catch(Exception $e){
	echo "Probleme: ", $e->getMessage();
	die();
}
$count = $req->rowCount();

if($count==0 && $name != 'admin'){
			$req = $bdd->prepare('INSERT INTO user (mail,password,name,first_name,telephone) VALUES(:mail,:password,:name,:first_name,:telephone)');

		try{
$req->execute(array(
	'mail' => $mail,
	'name' => $name,
	'first_name' => $first_name,
	'telephone' => $tel,
	'password' => hash("ripemd160",$password)	
	));	

}
		catch(Exception $e){
	echo "Probleme: ", $e->getMessage();
	die();
}
session_start();
$_SESSION['user']=$mail;
header('location: ../Vue/contacts.php');
}
else{
	echo "This mail is already used !";
}
	
	}


?>