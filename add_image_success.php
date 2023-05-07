 <?php

include 'db_connection.php';



if(isset($_POST['submit']) && $_POST['submit'] == 'Add New'){


	if (isset($_FILES['image']) && $_FILES['image'] != '') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg') {

            if ($_FILES["image"]["size"] < 300000) {

                $FileName = $_FILES["image"]['name'];
                $ExplodeFileName = explode('.', $FileName);
                $ImageName = $ExplodeFileName[0] . '_' . time() . '.' . $ExplodeFileName[1];
                move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/' . $ImageName);
            } else {
               // header("location:add_mission_vision.php?msg=File Size error."); 
               echo "file size error"; 
                die;
            }
        } else {
             header("location:add_mission_vision.php?msg=File uploading Error.");  
            die; 
        }
    } else {
        $ImageName = '';
    }


	if(isset($_POST['name']) && $_POST['name'] !=''){
		$Name=$_POST['name'];
	}else{
		$Name='';
	}


	if($ImageName !='' && $Name !=''){

		$FlatConn -> query("INSERT INTO `gallery_tbl` SET `name` = '".$Name."',`image` = '".$ImageName."' ");
       // header("location:mission_vision.php");

	}else{
		//header("location:add_mission_vision.php?msg=All field are require.");
	}

}

?>