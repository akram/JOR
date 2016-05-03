
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Not registered<b class="caret"></b></a>   
						<ul class="dropdown-menu">                       
                        <li>
                            <a href="../Controleur/logout.php"><i class="fa fa-fw fa-power-off"></i> Login Page</a>
                        </li>
                    </ul>
                </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active" >
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>Register</a>
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
                            Register
                        </h1>                       
                    </div>
                </div>
                <!-- /.row -->
              <div style="margin-left:auto;margin-right:auto;width:20%;text-align:center;" >
      <form class="form-signin" name="form_login" method="post" action="../Controleur/create.php" onsubmit="return verif(this)" role="form">
            
        <input name="user_id" type="text" id="user_id" placeholder="Mail" class="form-control" required autofocus> 
		 <input name="user_id2" type="text" id="user_id2" placeholder="Mail" class="form-control" onblur="verifMail(this)" required> 
		  <input name="Name" type="text" id="Name" placeholder="Name" class="form-control" required> 
		   <input name="First_Name" type="text" id="First_Name" placeholder="First Name" class="form-control" required> 
		   <input name="tel" type="text" id="tel" placeholder="Telephone" class="form-control" > 
        <input type="password" name="password" id="password" placeholder="Password" class="form-control"required> 
		<input type="password" name="password2" id="password2" placeholder="Password" class="form-control" onblur="verifPassword(this)" required>
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="Register" value="Create account" required>
      </form>
	
	</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	
	<script src="../js/VerifForm.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
