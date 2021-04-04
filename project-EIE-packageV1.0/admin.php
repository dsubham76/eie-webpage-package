<?php
$uname="admin";
$psw="admin";

session_start();
if (isset($_SESSION['uname'])) {
	# code...
	// echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
	// echo "<script>location.href='admin.php'</script>";
	session_destroy();
}
else{
	if($_POST['uname']==$uname && $_POST['psw']==$psw){

		$_SESSION['uname']=$uname;
		echo "<script>location.href='admin.php'</script>";

	}
	else{
		echo "<script>alert('username or password incorrect!')</script>";
		session_destroy();
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style type="text/css">
	#d{
	border: 1px solid black;
  	margin-left: 25px;
  	margin-top: 100px;
  	width: 100%
	}
	section{
		margin-top: 50px;
		/*height: 100vh;*/
		width: 100vw;
		display: flex;
		justify-content: space-between;
		text-transform: uppercase;
	}
	html{scroll-behavior: smooth;}
	
	ul{
		margin-top: 50px;
		list-style: none;
		height: 50px;
		width: 100%;
		position: fixed;
		background: crimson;
		box-shadow: 2px 0px 5px black;
		display: flex;
		justify-content: space-around;
		
	}
	ul li{
		margin: 5px;
		padding: 5px;
	}
	ul li a{
		color: white;
		text-decoration: none;
		font-size: 20px;
		padding: 5px;
	}
	ul li a:hover{
		background:white;
		color: blue;
	}
	
	#sec1{
		background: linear-gradient(-45deg, white 30%, yellow 0%);
	}
	#sec2{
		background: linear-gradient(-45deg, white 30%, lightgreen 0%);
	}
	.content{
		display: flex;
		width: 500%
	}
	#add-cafe-form{
		margin-top: 100px;
	}
	#header{
		
		font-size: 50px;
		position: fixed;
		display: flex;
		
		

	}
</style>
<!-- <script type="text/javascript">
	document.getElementById('students')
</script> -->
<body>

<!-- <button id="students">Students</button>
<button id="teachers">Teachers</button> -->
<div id="header">
	<h1>Administration Panel</h1>
</div>

<ul>
	<li><a href="#sec1">Students</a></li>
	<li><a href="#sec2">Teachers</a></li>
</ul>
<div class="content">

<section id="sec1">
<div id="d">
</div>
<form id="add-cafe-form">
<input type="text" name="name" placeholder="name">
<input type="text" name="email" placeholder="email address">
<input type="text" name="phone" placeholder="phone number">

<button>Add</button>
</form>
</section>
<section id="sec2">
	
</section>



</div>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>
<script type="text/javascript" src="firebase-config.js"></script>
<script type="text/javascript" src="firebase.js"></script>
</body>
</html>