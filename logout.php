<?php
session_start();	
setcookie("token", "", time() - 1, "/" , "", "", TRUE);
session_destroy();

header("location: index.php");
?>