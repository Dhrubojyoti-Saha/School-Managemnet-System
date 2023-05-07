  <?php

include 'db_connection.php';


if(isset($_POST['submit']) && $_POST['submit'] == 'Add New'){

	if(isset($_POST['name']) && $_POST['name'] !=''){
		$Name=$_POST['name'];
	}else{
		$Name='';
	}

	if(isset($_POST['mobile_no']) && $_POST['mobile_no'] !=''){
		$MobileNo=$_POST['mobile_no'];
	}else{
		$MobileNo='';
	}

	if(isset($_POST['email_id']) && $_POST['email_id'] !=''){
		$EmailId = $_POST['email_id'];
	}else{
		$EmailId = '';
	}

	if(isset($_POST['password']) && $_POST['password'] !=''){
		$Password = $_POST['password'];
	}else{
		$Password = '';
	}
        
        if(isset($_POST['school_id']) && $_POST['school_id'] !=''){
		$SchoolId = $_POST['school_id'];
	}else{
		$SchoolId = '';
	}
        
        if(isset($_POST['is_active']) && $_POST['is_active'] !=''){
		$IsActive = $_POST['is_active'];
	}else{
		$IsActive = '';
	}
        
        if($Name !='' && $MobileNo !='' && $EmailId !='' && $Password !='' && $SchoolId !='' && $IsActive !=''){


		$FlatConn -> query("INSERT INTO `admin_tbl` SET `name` = '".$Name."', `mobile_no` = '".$MobileNo."', `email_id` = '".$EmailId."', `password` = '".base64_encode(base64_encode($Password))."', `school_id` = '".$SchoolId."', `is_active` ='".$IsActive."', `created_date` = '".date('Y-m-d', time())."' ");
		header("location:member_details.php");
         
        }else{
                header("location:member_details.php?msg=all fields are require");
         
        }

}

?>