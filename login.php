
<?php

require_once("config.php");
if(isLogged()){
	
	header('Location: index.php');
	
}

?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CSGO Accounts</title>
  <meta name="A market place to sell Counter-Strike accounts" content="Counter-Strike Accounts">
  <meta name="Jacob Wilkinson" content="SitePoint">



  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/style.css?v=1.0">
  
  
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
		window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-floating"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->
  
  
</head>

<body>

 <div id="border1"><img src="images/border.jpg" width="100%" height="100%" ></div>
  <div id="border2"><img src="images/border.jpg" width="100%" height="100%" ></div>





<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a class=" navbar-brand"  href="index.php"> CSGO Accounts</a></li>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li>
		 <li><a id="homebutton" href="index.php" onmouseover="mOver(this)" onmouseout="mOut(this)" class="glyphicon glyphicon-home"></a></li>
        <li><a href="listings.php">Account Listings</a></li>

		
      </ul>
	  <ul class="nav navbar-nav navbar-right">
	  <li ><a href="login.php" >Login</a></li> 
	  </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">




		</div>
	

			<div class="col-xs-6" id="main">
	
				
	
	
					<ul class="nav nav-pills yellow">
						<li class="active"><a data-toggle="pill" href="#login">Login</a></li>
						<li><a data-toggle="pill" href="#register">Register</a></li>
					</ul>
			
					<div class="tab-content">
						<div id="login" class="tab-pane fade in active">
							<form action="userlogin.php" method="post">
								<div class="form-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-default" >Submit</button>
							</form>
						</div>
			
			
						<div id="register" class="tab-pane fade">
							<form action="register.php" method="post">
								<div class="form-group">
									<label for="email">Email address:</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>
								<div class="form-group">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<button type="submit" class="btn btn-default" >Submit</button>
							</form>
						</div>
					</div>
				
			</div>
		<div class="col-xs-3" >
			<div class="container">
				
			</div>
		</div>
	</div>
 </div>
 
<script src="js/minimiseSide.js"></script>
<script src="showUser.js"></script>
<script src="js/homebutton.js"></script>
<script src="js/smileys.js"></script>
<script>$("p").smilify();</script>

</body>
</html>

