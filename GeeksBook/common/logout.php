<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

//echo $_SESSION['S_ID'] ;
?>


<html>
<head>
	<title>
	</title>
</head>
<body>
<?php header("Location:../HOME/home.php");?>

</body>
</html>
