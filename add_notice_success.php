 <?php

include 'db_connection.php';
if(isset($_POST['submit']) && $_POST['submit'] == 'Add New'){

	if (isset($_FILES['image']) && $_FILES['image'] != '') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg') {

            if ($_FILES["image"]["size"] < 30000) {
                $FileName = $_FILES["image"]['name'];                
                $ExplodeFileName = explode('.', $FileName);                
                $ImageName = $ExplodeFileName[0] . '_' . time() . '.' . $ExplodeFileName[1];                
                move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/' . $ImageName);
            } else {
                header("location:add_notice.php?msg=File Size error.");  
                die;
            }
        } else {
             header("location:add_notice.php?msg=File uploading Error.");  
            die; 
        }
    } else {
        $ImageName = '';
    }


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


	if($ImageName !='' && $Title !='' && $Details !=''){


		$FlatConn -> query("INSERT INTO `notice_tbl` SET `title` = '".$Title."', `details` = '".$Details."', `image` = '".$ImageName."' ");
            header("location:notice.php");
	}else{
		header("location:add_notice.php?msg=all field are require");
	}

}

?>