<?php

include 'db_connection.php';
print_r($_POST);


if(isset($_POST['submit']) && $_POST['submit'] == 'Sign up'){

	if(isset($_POST['username']) && $_POST['username'] !=''){
		$Name=$_POST['username'];
	}else{
		$Name='';
	}

	if(isset($_POST['mobile_no']) && $_POST['mobile_no'] !=''){
		$MobileNo=$_POST['mobile_no'];
	}else{
		$MobileNo='';
	}

	if(isset($_POST['email_id']) && $_POST['email_id'] !=''){
		$EmailId=$_POST['email_id'];
	}else{
		$EmailId='';
	}

	if(isset($_POST['password']) && $_POST['password'] !=''){
		$Password=$_POST['password'];
	}else{
		$Password='';
	}

	if(isset($_POST['confirm_password']) && $_POST['confirm_password'] !=''){
		$ConfirmPassword=$_POST['confirm_password'];
	}else{
		$ConfirmPassword='';
	}

	if($Name !='' && $MobileNo !='' && $EmailId !='' && $Password !='' && $ConfirmPassword !=''){

		if($Password == $ConfirmPassword){
			$EmailRecords = $FlatConn -> query("SELECT * FROM `admin_tbl` WHERE `email_id` = '".$EmailId."' ") ;

		if($EmailRecords -> num_rows ==0){

			$MobileNoRecords = $FlatConn -> query("SELECT * FROM `admin_tbl` WHERE `mobile_no` = '".$MobileNo."' ");

		if($MobileNoRecords -> num_rows == 0){

			$CreatedDate = time();
			$IsActive='1';

			$FlatConn -> query("INSERT INTO `admin_tbl` SET `name` = '".$Name."', `mobile_no` = '".$MobileNo."', `email_id` = '".$EmailId."', `password` = '".base64_encode(base64_encode($Password))."', `is_active` ='".$IsActive."', `created_date` = '".date('Y-m-d H:i:s', $CreatedDate)."' ");

			header("location:index.php");

		}else{
			header("location:register.php?msg=Please enter a new mobile no.");
		}

		}else{
			header("location:register.php?msg=Email Id already registered.");
		}

		}else{
			header("location:register.php?msg=Confirm Password does not match with your password.");
		}

	}else{
		header("location:register.php?msg=All fields are required.");
	}

}else{
    echo "you are a haker";
}



?>
