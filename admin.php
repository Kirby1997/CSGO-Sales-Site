<?php


include_once("config.php");
 
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
		header('Location: index.php');
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
	<a class=" navbar-brand"  href="#"> CSGO Accounts</a></li>
      
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


<div class="container">
<div class="col-xs-3">



</div>
	

    <div class="col-xs-6" id="main">
      
	  
	  <h3> Admin Panel </h3>

	  <ul class="nav nav-pills yellow">
						<li class="active"><a data-toggle="pill" href="#lookup">User Lookup</a></li>
						<li><a data-toggle="pill" href="#blog">Post Blog</a></li>

					</ul>
			
					<div class="tab-content">
						<div id="lookup" class="tab-pane fade in active">
							
							<form>
	  
								User ID:<br>

								
								<select name="id" class="form-control" onchange="showUser(this.value)" >
									<option value="">select a user id</option>
									<?php include_once("getuserlist.php"); ?>
								</select>
								
								
								
								
							</form>
							<br>
							<div id="txtHint"><b>Person info will be listed here...</b></div>
							
							
						</div>
			
			
						<div id="blog" class="tab-pane fade">
							<!-- BLOG THINGS GO IN HERE -->
							
							
							<form action="postblog.php" method="post">
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" class="form-control" id="title" name="title">
							</div>
							<div class="form-group">
								<label for="content">Post:</label>
								<textarea type ="text" class="form-control" rows="5" id="content" name="content"></textarea>
							</div>
							
							
							<button type="submit" class="btn btn-default" >Submit</button>
							</form>
						</div>
						
						
						
					
						

					</div>


	  
	  
	  
    </div>
	
		
	
	

 <div class="col-xs-3"></div>
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
<script src="showUser.js"></script>
<script src="js/homebutton.js"></script>
<script src="js/smileys.js"></script>
<script>$("p").smilify();</script>





</body>
</html>