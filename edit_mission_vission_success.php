 <?php

include 'db_connection.php';



if(isset($_POST['submit']) && $_POST['submit'] == 'Update'){


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
               // header("location:add_mission_vision.php?msg=File Size error.");  
               
            }
        } else {
            // header("location:add_mission_vision.php?msg=File uploading Error.");  
            
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


	if($ImageName !=''){

		$FlatConn -> query("UPDATE `mission_vision_tbl` SET `title` = '".$Title."', `details` = '".$Details."', `image` = '".$ImageName."' WHERE `id` = '".$_POST['update_id']."' ");
       // header("location:mission_vision.php");

	}else{
                $FlatConn -> query("UPDATE `mission_vision_tbl` SET `title` = '".$Title."', `details` = '".$Details."' WHERE `id` = '".$_POST['update_id']."' ");

	}
           // header("location:add_mission_vision.php?msg=All field are require.");

}

?>