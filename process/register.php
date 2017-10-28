<?php
include 'connection/connect.phyp';

if (isset($_POST['register'])) {
	$std_name    = trim(mysqli_real_escape_string($db,$_POST['name']));
	$std_dob     = trim(mysqli_real_escape_string($db,$_POST['dob']));
	$std_gender  = trim(mysqli_real_escape_string($db,$_POST['gender']));
	$std_email   = trim(mysqli_real_escape_string($db,$_POST['email']));
	$std_address = trim(mysqli_real_escape_string($db,$_POST['address']));
	$std_phone   = trim(mysqli_real_escape_string($db,$_POST['phone']));
	$std_school  = trim(mysqli_real_escape_string($db,$_POST['school']));
	$std_mname   = trim(mysqli_real_escape_string($db,$_POST['mname']));
	$std_fname   = trim(mysqli_real_escape_string($db,$_POST['fname']));
	$std_img    = trim(mysqli_real_escape_string($db,$_POST['img']));

	$query = mysqli_query($db, "INSERT INTO tbl_std(std_name,std_dob,std_gender,std_email,std_address,std_phone,std_school,std_mname,std_fname,std_img)
			VALUES('$std_name','$std_dob','$std_gender','$std_email','$std_address','$std_phone',
				'$std_school','$std_mname','$std_fname','$std_img');
	if($query){
		echo "Successfull!!!!";
		header("Location: index.php");
		}
}

?>