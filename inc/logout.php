<?php

if (isset($_POST['logout'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php?msg= ".urlencode("You have successfully logged out!!!!"));

}


?>