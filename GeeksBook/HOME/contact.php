<html>
<head>
<link rel="stylesheet" href="../sign-up/css/style.css">
<?php include '../common/meta.html';?>

<link rel="stylesheet" type="text/css"  href="../HOME/home.css">
<style>
.contact {
	color: blue;
	font-family: verdana;
	font-size:30px;
}
.foot1{
	margin-left : 180px;
	margin-top	: 100px;
	
	}
.footer-distributed {
	background-color:navy;
}
.img-circle {
	border-radius : 50%
}
.btnlogin{
margin-left:none;
}
.blank {
	padding-top:100px;
	padding-left:180px;
	background-color:white;
}
</style>
</head>
<body>
<?php
  include '../common/sidebar.php';
  include 'contact-to-admin-form.php';
  
  echo '<section class="foot1">	';
  include '../common/footer.php';
  echo '</section>';
 ?>

</body>
</html>
