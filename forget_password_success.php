<?php

include 'db_connection.php';


if(isset($_POST['submit']) && $_POST['submit'] == 'forgotten password'){
	//print_r($_POST);

	if(isset($_POST['username']) && $_POST['username'] !=''){
		$UserName = $_POST['username'];
	}else{
		$UserName ='';
	}

	if($UserName != ''){
			$UserRecords = $FlatConn -> query("SELECT * FROM `admin_tbl` WHERE `email_id` = '".$UserName."' ") ;
			if($UserRecords -> num_rows == 1){
				  $_SESSION['User_ID'] = $UserName;
					header("location:change_forget_password.php");
				}else{
				header("location:forget_password.php?msg=Enter your registered email id");
				}

	}else{
		header("location:forget_password.php?msg=All fields are required.");
	}

}else{
	header("location:error.php");
}






?>
