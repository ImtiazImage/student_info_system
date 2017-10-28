<?php
include 'connection/connect.php';

if (isset($_POST['login'])) {
	$error = "";
    $name     = trim(mysqli_real_escape_string($db,$_POST['u_name']));
    $pass     = trim(mysqli_real_escape_string($db,$_POST['u_pass']));

    $query 	  = mysqli_query($db, "SELECT * FROM tbl_user WHERE username = '$name' && password = '$pass'");
    if (mysqli_num_rows($query) == 1) {
    	$_SESSION['username'] = $name;

    	header("Location: index.php?msg=".urlencode("login successfull !!"));
    } else {
    	$error = "Wrong Username or Password !!!";
    	header("Location: index.php?msg=".urlencode("<span class = 'alert alert-danger'>".$error."</span>"));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">HOME</a></li>
			</ul>
			<div class="nav-login">
				<?php 
					if (isset($_SESSION['username'])) {
						echo '<form action="inc/logout.php" method="POST">
						<button type="submit" name="logout">Logout</button>';
					} else {

					echo	'<form action="" method="POST">
							<input type="text" name="u_name" placeholder="Username" />
							<input type="password" name="u_pass" placeholder="Password" />
							<button type="submit" name="login">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>


			</div>
		</div>		
	</nav>
</header>