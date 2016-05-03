<?php
//return the good models (good type and current user) to the ajax function in a <select> component
session_start();
if(!isset($_SESSION['user'])){
	header('location: index.php');
}


include 'BddConnexion.php';
include '../Modele/user.php';

$conn = new BddConnexion(); 
$conn ->connect();
$bdd= $conn->get_bdd();

$search=$_POST["search"];
$type=$_POST["type"];



if($search!=""){
	
	$sql="SELECT * from directory WHERE ".$type." LIKE '%".$search."%' AND user_mail='".$_SESSION['user']."'";
	
	$res = $bdd->query($sql);
	
	$count = $res->rowCount();
	
	if($count==0){
		echo "<div id='tab_user' name='tab_user'>No result</div>";
	}
	else{
		echo "<div> <table class='table' name='tab_user' id='tab_user'><tr class='info'><td>Name</td><td>First Name</td><td>Mail</td><td>Tel</td></tr>";
foreach($res as $user){
	echo '<tr><td>'.$user['name'].'</td><td>'.$user['first_name'].'</td><td>'.$user['mail'].'</td><td>'.$user['telephone'].'</td><td><a href="../Controleur/deleteContact.php?id='.$user['id'].'">X</a></td>';	
}
echo "</tr></table>";

	}
	
}

else{
	

	$sql="SELECT * from directory WHERE user_mail='".$_SESSION['user']."'";
	
	$res = $bdd->query($sql);
		echo "<div> <table class='table' name='tab_user' id='tab_user'><tr class='info'><td>Name</td><td>First Name</td><td>Mail</td><td>Tel</td></tr>";
foreach($res as $user){
	echo '<tr><td>'.$user['name'].'</td><td>'.$user['first_name'].'</td><td>'.$user['mail'].'</td><td>'.$user['telephone'].'</td><td><a href="../Controleur/deleteContact.php?id='.$user['id'].'">X</a></td>';	
}
echo "</tr></table>";
}




?>