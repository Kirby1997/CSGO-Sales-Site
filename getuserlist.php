<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include_once("config.php");
$conn = db();




$sql = "SELECT id FROM accounts ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
if($numrows > 0){
	while($row = mysqli_fetch_array($result)){
 
			
			
			echo "<option value=" . $row['id'] . ">" . $row['id'] . "</option>";
			
		}
	}
	
			
			
mysqli_close($conn);
?>

</body>
</html>