<?php
include 'db_connection.php';

if(isset($_POST['submit']) && $_POST['submit'] == 'Update'){
    
	if(isset($_POST['name'])&& $_POST['name'] !=''){
		$Name=$_POST['name'];
	}else{
		$Name='';
	}

	if(isset($_POST['mobile_no'])&& $_POST['mobile_no'] !=''){
		$MobileNo=$_POST['mobile_no'];
	}else{
		$MobileNo='';
	}

	if(isset($_POST['email_id'])&& $_POST['email_id'] !=''){
		$EmailId=$_POST['email_id'];
	}else{
		$EmailId='';
	}

	if(isset($_POST['address'])&& $_POST['address'] !=''){
		$Address=$_POST['address'];
	}else{
		$Address='';
	}

	if(isset($_POST['subject_name'])&& $_POST['subject_name'] !=''){
		$SubjectName=$_POST['subject_name'];
	}else{
		$SubjectName='';
	}

	if(isset($_POST['password'])&& $_POST['password'] !=''){
		$Password=$_POST['password'];
	}else{
		$Password='';
	}
	if($Name !='' && $MobileNo !='' && $EmailId !='' && $Address !='' && $SubjectName !='' && $Password !='' ){

		   $FlatConn -> query("UPDATE `student_tbl` SET `name` = '".$Name."', `mobile_no` = '".$MobileNo."', `email_id` = '".$EmailId."', `address` = '".$Address."', `subject` = '".$SubjectName."', `password` = '".$Password."' WHERE `id` = '".$_POST['update_id']."'");
    
    header("location:student_details.php");

	}else{
		echo "All field are require";
	}
    
    
}else{
    header("location:logout.php");
}
?>
