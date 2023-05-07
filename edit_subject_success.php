  <?php

include 'db_connection.php';


if(isset($_POST['submit']) && $_POST['submit'] == 'Update'){

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

		$FlatConn -> query("UPDATE `subject_tbl` SET `course` = '".$Course."', `subject_name` = '".$SubjectName."', `details` = '".$Details."' WHERE `id` = '".$_POST['update_id']."' ");
		header("location:subject.php");

}

?>