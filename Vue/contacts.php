<?php
session_start();

if(!isset($_SESSION['user'])){
	header('location: ../index.php');
}

include '../Controleur/BddConnexion.php';
include '../Modele/user.php';


$conn = new BddConnexion(); 
$conn ->connect();
$bdd= $conn->get_bdd();


	$sql="SELECT * from directory WHERE user_mail='".$_SESSION['user']."'";
	
	$i=0;
 foreach($bdd->query($sql) as $row)
 {
	$users[]=new user($row['name'],$row['first_name'],$row['mail'],$row['telephone'],$row['id']); 
	
	$i++;
	 
 }


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POC</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a href="presentation.php"><img src="../img/logo.png" alt="logo" height="50" width="130"></a>
            </div>
            <!-- Top Menu Items -->
             <ul class="nav navbar-right top-nav">               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">                       
                        <li>
                            <a href="../Controleur/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                    </ul>              
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-table"></i> Contacts</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            My contacts
                        </h1>                       
                    </div>
                </div>
                <!-- /.row -->
           <div class="row">
		   <div>
	<form role="form" name="form_search" id="form_search" method="post" action="../Controleur/search.php" >
    <label class="radio-inline">
      <input type="radio" name="optradio" id="radio1" value="name" onchange='go()' checked>Name
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="radio2"  value="first_name" onchange='go()'>First Name
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="radio3"  value="mail" onchange='go()'>Mail
    </label>
	 <label class="radio-inline">
      <input type="radio" name="optradio" id="radio4"  value="telephone" onchange='go()'>Tel
    </label>
	<label class="radio-inline">
	 <input name="search" type="text" id="search" placeholder="Search" class="form-control" oninput="go()"> 
	 </label>	
  </form>
<label> <i>Add a contact <a href="javascript:add_entry();">here</a></i></label>
<?php if($i>0){ ?>
<div> <table class="table" name="tab_user" id="tab_user"><tr class="info"><td>Name</td><td>First Name</td><td>Mail</td><td>Tel</td></tr> <?php


foreach($users as $user){
	echo '<tr><td>'.$user->name.'</td><td>'.$user->first_name.'</td><td>'.$user->email.'</td><td>'.$user->telephone.'</td><td><a href="../Controleur/deleteContact.php?id='.$user->id.'"><FONT color="red">X</FONT></a></td><td><a href="javascript:modify_entry(\''.$user->name.'\',\''.$user->first_name.'\',\''.$user->email.'\',\''.$user->telephone.'\',\''.$user->id.'\')"><FONT color="green">Modify</FONT></a></td>';
	
}
echo "</tr></table>";
}

 else{
	echo "<div id='tab_user' name='tab_user'>No result</div>";
}
?>
</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	
	<script src="../js/AjaxTab.js"></script>	

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
