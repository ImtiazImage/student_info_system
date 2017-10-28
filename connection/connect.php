<?php
session_start();
$db = mysqli_connect("localhost","root","","std_info_system");
return $db;

?>