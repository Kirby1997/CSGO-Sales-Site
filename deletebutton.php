
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php

require_once("config.php");
if($_SESSION['rank']==2){
	
	

//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		
		
		
		$result = $_POST['delete'];
		$result_explode = explode('|', $result);
		$postid = $result_explode[0];
		$table = $result_explode[1];
	
		$deleterow = "DELETE FROM ".$table." WHERE id='".$postid."'";
		$conn = db();
		mysqli_query($conn,$deleterow);
		header("location: ". $_SERVER['HTTP_REFERER']);
		
		

		} 		
		
		}
		
		else{
			header("location:index.php");
			
		}
	
	

?>


</body>
</html>