
<?php
	session_start();
	//if($_SERVER["HTTP_REFERER"])
	/*echo '<div style="margin-left:400px;">';
	echo $_SERVER["HTTP_REFERER"];
	echo '</div>';*/
	if(isset($_SESSION["uloginflag"]))
	{
		$varl=$_SESSION["userloginflag"];
		if($varl==2)
		{	
			echo "<script>alert('Wrong Password');</script>";
		}
		else if($varl==3)
		{
			echo "<script>alert('Wrong Username');</script>";
		}
		//this unset session variable
		
		unset($_SESSION["uloginflag"]);
	}
	
	
?>
<html>
<head>

<?php include '../common/meta.html';?>

<!--<link rel="stylesheet" type="text/css"  href="home.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../flat-login-form/css/style.css">

<style>
.foot1{
	margin-left : 180px;
	margin-top: 200px;
	
	}
.footer-distributed {
	background-color:#56f442;
}
.flogin{
	margin-left:100px;
}
.img-circle {
	border-radius : 50%
}
.clr{
	color:#000;
}
</style>
</head>
<body>
<?php include '../common/sidebar.php'; ?>

<div class="flogin">
<?php include '../USER/login-form.html'; ?>
</div>

<section class="foot1">
<?php include '../common/footer.php' ;?>
</section>
	<!--<form action="u_login.php" method="GET">
		<fieldset>
		USERID<br>
		<input type="text" name="u_id"><br/>
		PASSWORD<br>
		<input type="password" name="u_pwd"><br/>
		<pre><input type="submit">  <input type="reset"></pre>
		</fieldset>
	</form>	-->
</body>
</html>

