<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include_once("config.php");
$conn = db();




$sql = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
if($numrows > 0){
	while($row = mysqli_fetch_array($result)){
 
			echo '<div id="blogpost">';
 
 
			echo "<h1><b>".$row['title']."</h1></b>" . $row['date'];
			echo "<p>".$row['content']."</p>";
			$blogid = $row['id'];
			echo $blogid;
			echo "<form method='post' action='deletebutton.php'> <button type='submit' name='delete' value='".$blogid."|blogs' class='glyphicon glyphicon-trash'></button> </form>";
			echo "<hr>";
			
			

			
			echo "</div>";
			
		}
	}
	
			
			
mysqli_close($conn);
?>

</body>
</html>