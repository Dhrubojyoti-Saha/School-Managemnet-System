  <?php

include 'db_connection.php';


if(isset($_POST['submit']) && $_POST['submit'] == 'Add New'){

	if(isset($_POST['course']) && $_POST['course'] !=''){
		$Course=$_POST['course'];
	}else{
		$Course='';
	}


	if(isset($_POST['subject_name']) && $_POST['subject_name'] !=''){
		$SubjectName=$_POST['subject_name'];
	}else{
		$SubjectName='';
	}


	if(isset($_POST['details']) && $_POST['details'] !=''){
		$Details = $_POST['details'];
	}else{
		$Details = '';
	}


	if($Course !='' && $SubjectName !='' && $Details !=''){

		$FlatConn -> query("INSERT INTO `subject_tbl` SET `course` = '".$Course."', `subject_name` = '".$SubjectName."', `details` = '".$Details."' ");
		header("location:subject.php");

	}else{
		header("location:course_details.php?msg=all field are require");
	}

}

?>