 <?php

include 'db_connection.php';



if(isset($_POST['submit']) && $_POST['submit'] == 'Add New'){

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

	if($Title !='' && $Details != '' && $CourseDuration !='' && $CourseFees !=''){
                
		$FlatConn -> query("INSERT INTO `course_details_tbl` SET `title` = '".$Title."', `details` = '".$Details."', `course_duration` = '".$CourseDuration."', `course_fees` = '".$CourseFees."' ");
		header("location:course_details.php");

	}else{
		header("location:course_details.php?msg=all field are require");
	}

}

?>