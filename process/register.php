<?php
include '../connection/connect.php';

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
	
	// Image original information
	$permitted_ext  = array('jpg','jpeg','png');
	$std_img 		= $_FILES['img']['name'];
	$std_img_size 	= $_FILES['img']['size'];
	$std_tmp_img  	= $_FILES['img']['tmp_name'];
	// Unique name for the Image
	$ext 			= explode('.', $std_img);
	$img_ext 		= strtolower(end($ext));
	$Unique_img 	= "uploads/".substr(md5(time()), 0 , 10).'.'.$img_ext;
	// conditions for execution
	if (empty($std_img)) {
		echo "<span class='error'>Please Select an Image...</span>";
	} elseif ($std_img < 5120) {
		echo "<span class='error'>Image size should be atleast 5kb..</span>";
	} elseif (!in_array($img_ext, $permitted_ext)) {
		echo "<span class='error'>You can Upload only:".implode(',', $permitted)."</span>";
	} 	else{
	//Move image to destination folder and insert into database.
		move_uploaded_file($std_tmp_img, $uniue_img);
		$query = mysqli_query($db, "INSERT INTO tbl_std(std_name,std_dob,std_gender,std_email,std_address,std_phone,std_school,std_mname,std_fname,std_img)
			VALUES('$std_name','$std_dob','$std_gender','$std_email','$std_address','$std_phone',
				'$std_school','$std_mname','$std_fname','$unique_img'");
			if ($query) {
				header("Location: ../index.php?msg=".urlencode("Data Uploaded Successfully!!"));
			}else{
				header("Location: ../register.php?msg=".urlencode("Data Not Uploaded Successfully!!"));
			}
		   }
    }



?>