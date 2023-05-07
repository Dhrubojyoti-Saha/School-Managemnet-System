<?php 
include 'db_connection.php';

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
 //print_r($_POST);
	if(isset($_POST['username']) && $_POST['username'] != ''){
		$UserName=$_POST['username'];
	}else{
		$UserName='';
	}

	if(isset($_POST['password']) && $_POST['password'] != ''){
		$Password=$_POST['password'];
	}else{
		$Password='';
	}
		if($UserName !='' && $Password !=''){

			$UserRecords = $FlatConn -> query("SELECT * FROM `admin_tbl` WHERE `email_id` = '".$UserName."' ");
			if($UserRecords -> num_rows !=0){
				$Result = mysqli_fetch_assoc($UserRecords);
				$decode_password = base64_decode(base64_decode($Result['password']));
				if($Result['email_id'] == $UserName && $decode_password == $Password){
                                        $_SESSION['login_status'] = true;
                                        $_SESSION['login_email'] = $UserName;
                                        $_SESSION['school_id'] = $Result['school_id'];
					header("location:dashbord.php");
					
				}else{
					header("location:index.php?msg=Username or Password does not match.");
				}

			}else{
				header("location:index.php?msg=Username does not exist.");
			}

		}else{
			header("location:index.php?msg=all fields are require.");
		}
}else{
	echo "you are a haker";
}


?>