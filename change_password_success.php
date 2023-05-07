<?php
include 'db_connection.php';
if(isset($_POST['submit']) && $_POST['submit'] == 'forgotten password'){

	if(isset($_POST['password']) && $_POST['password'] != ''){
		$Password = $_POST['password'];
	}else{
		$password = '';
	}

	if(isset($_POST['confirm_password']) && $_POST['confirm_password'] !=''){
		$ChangePassword = $_POST['confirm_password'];
	}else{
		$ChangePassword = '';
	}

	if($Password !='' && $ChangePassword !=''){

		if($Password == $ChangePassword){
			$FlatConn -> query("UPDATE `admin_tbl` SET `password` = '".base64_encode(base64_encode($_POST['password']))."' where `email_id` = '".$_SESSION['User_ID']."'");
			echo "sucess";

		}else{
			header("location: change_forget_password.php?msg=Confirm Password does not match with your password");
		}
	}else{
		header("location:change_forget_password?msg=All fields are required");
	}

}


?>
