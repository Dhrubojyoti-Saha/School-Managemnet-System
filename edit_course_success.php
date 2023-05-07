  <?php

include 'db_connection.php';



if(isset($_POST['submit']) && $_POST['submit'] == 'Update'){

	if(isset($_POST['title']) && $_POST['title'] !=''){
		$Title=$_POST['title'];
	}else{
		$Title='';
	}

	if(isset($_POST['details']) && $_POST['details'] !=''){
		$Details=$_POST['details'];
	}else{
		$Details='';
	}

	if(isset($_POST['course_duration']) && $_POST['course_duration'] !=''){
		$CourseDuration = $_POST['course_duration'];
	}else{
		$CourseDuration = '';
	}

	if(isset($_POST['course_fees']) && $_POST['course_fees'] !=''){
		$CourseFees = $_POST['course_fees'];
	}else{
		$CourseFees = '';
	}


		$FlatConn -> query("UPDATE `course_details_tbl` SET `title` = '".$Title."', `details` = '".$Details."', `course_duration` = '".$CourseDuration."', `course_fees` = '".$CourseFees."' WHERE `id` = '".$_POST['update_id']."' ");
		header("location:course_details.php");

}

?>