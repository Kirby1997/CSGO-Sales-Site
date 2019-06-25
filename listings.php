
<?php

require_once("config.php");


	$logoutButton = '<li ><a href="logout.php" >Logout</a></li> ';
	$loginButton = '<li ><a href="login.php" >login</a></li> ';
	if(isLogged() == true){
		$whatisbutton = $logoutButton;
	}
	else {
		$whatisbutton = $loginButton;
	}

	if ($_SESSION["rank"] == 2){
		$adminButton = '<li> <a href="admin.php" > Admin </a></li>';
	}
		
	else{
	
		$adminButton = '<li> <a href="#" > </a></li>';
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
	  <?php echo $adminButton; ?>
	  <?php echo $whatisbutton; ?>
	  </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3">




		</div>
	

			<div class="col-xs-6" id="main">
	
				
	
	
					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#listings">Listings</a></li>
						<li><a data-toggle="pill" href="#create">Create Listings</a></li>
					</ul>
			
					<div class="tab-content">
						<div id="listings" class="tab-pane fade in active">
							<?php include_once("getlistings.php"); ?>
						
						</div>
			
			
						<div id="create" class="tab-pane fade">
							<form action="createlisting.php" method="post">
								<div class="form-group">
									<select name="rank" class="form-control" id="rank">
										<option value="1">Silver 1</option>
										<option value="2">Silver 2</option>
										<option value="3">Silver 3</option>
										<option value="4">Silver 4</option>
										<option value="5">Silver Elite</option>
										<option value="6">Silver Elite Master</option>
										<option value="7">Gold Nova 1</option>
										<option value="8">Gold Nova 2</option>
										<option value="9">Gold Nova 3</option>
										<option value="10">Gold Nova Master</option>
										<option value="11">Master Guardian 1</option>
										<option value="12">Master Guardian 2</option>
										<option value="13">Master Guardian Elite</option>
										<option value="14">Distinguished Master Guardian</option>
										<option value="15">Legendary Eagle</option>
										<option value="16">Legendary Eagle Master</option>
										<option value="17">Supreme Master First Class</option>
										<option value="18">Global Elite</option>
									</select>
								</div>
								<div class="form-group">
									<label for="price">Price (USD):</label>
									<input type="int" class="form-control" id="price" name="price" placeholder="Price $">
								</div>
								
								<div class="form-group">
									<label for="username">Account username:</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Username">
								</div>
								
								<div class="form-group">
									<label for="password">Account password:</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
  <!-- Side bar -->
  <?php
 
	if(isLogged()){
 
 ?>
 
 
<div id="sidePanel">


<img height=100px width=100px src= "<?php echo $_SESSION["picture"];?>">
<p><b>Username:</b> <?php echo $_SESSION["username"];?></p>
<p><b>Balance:</b> <?php echo $_SESSION["balance"];?> </p>
<p><b>Sold:</b> <?php echo $_SESSION["sold"];?></p>
<p><b>Bought:</b> <?php echo $_SESSION["bought"];?></p>

</div>

<div id="sidePanelButton" onClick="toggleSide()">
<p><</p>
</div>
<?php
}
 ?>

<script src="js/minimiseSide.js"></script>
<script src="js/homebutton.js"></script>
<script src="js/smileys.js"></script>
<script>$("p").smilify();</script>
</body>
</html>

