<?php

include 'db_connection.php';

 
if (isset($_POST['submit']) && $_POST['submit'] == 'Update') {

    if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '') {
     
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg') {

            if ($_FILES["logo"]["size"] < 30000) {

                $FileName = $_FILES["logo"]['name'];
                $ExplodeFileName = explode('.', $FileName);
                $ImageName = $ExplodeFileName[0] . '_' . time() . '.' . $ExplodeFileName[1];
                move_uploaded_file($_FILES["logo"]["tmp_name"], 'uploads/' . $ImageName);
            } else {
                // File Size error.  
            }
        } else {
            // File uploading Error.   
        }
    }



    if (isset($_POST['name']) && $_POST['name'] != '') {
        $Name = $_POST['name'];
    } else {
        $Name = '';
    }

    if (isset($_POST['mobile_no']) && $_POST['mobile_no'] != '') {
        $MobileNumber = $_POST['mobile_no'];
    } else {
        $MobileNumber = '';
    }

    if (isset($_POST['email_id']) && $_POST['email_id'] != '') {
        $EmailId = $_POST['email_id'];
    } else {
        $EmailId = '';
    }

    if (isset($_POST['country_id']) && $_POST['country_id'] != '') {
        $CountryId = $_POST['country_id'];
    } else {
        $CountryId = '';
    }

    if (isset($_POST['state_id']) && $_POST['state_id'] != '') {
        $StateId = $_POST['state_id'];
    } else {
        $StateId = '';
    }

    if (isset($_POST['district_id']) && $_POST['district_id'] != '') {
        $DistrictId = $_POST['district_id'];
    } else {
        $DistrictId = '';
    }

    if (isset($_POST['city_id']) && $_POST['city_id'] != '') {
        $CityId = $_POST['city_id'];
    } else {
        $CityId = '';
    }

    if (isset($_POST['password']) && $_POST['password'] != '') {
        $Password = $_POST['password'];
    } else {
        $Password = '';
    }
    
    if (isset($_POST['phone_no']) && $_POST['phone_no'] != '') {
        $PhoneNo = $_POST['phone_no'];
    } else {
        $PhoneNo = '';
    }
    
    if (isset($_POST['pincode']) && $_POST['pincode'] != '') {
        $Pincode = $_POST['pincode'];
    } else {
        $Pincode = '';
    }
    
    if (isset($_POST['grade']) && $_POST['grade'] != '') {
        $Grade = $_POST['grade'];
    } else {
        $Grade = '';
    }
    
    if (isset($_POST['address']) && $_POST['address'] != '') {
        $Address = $_POST['address'];
    } else {
        $Address = '';
    }


    if(isset($ImageName)){
    $FlatConn -> query("UPDATE `school_tbl` SET `name` = '".$Name."', `logo` = '".$ImageName."', `password`='".base64_encode(base64_encode($Password))."', `country_id` = '".$CountryId."', `state_id` = '".$StateId."', `district_id` = '".$DistrictId."', `city_id` = '".$CityId."', `address` = '".$Address."', `pincode` = '".$Pincode."', `mobile_no` = '".$MobileNumber."', `phone_no` = '".$PhoneNo."', `email_id` = '".$EmailId."', `grade` = '".$Grade."' WHERE `id` = '".$_POST['update_id']."'");
    }else{
    $FlatConn -> query("UPDATE `school_tbl` SET `name` = '".$Name."', `country_id` = '".$CountryId."', `password`='".base64_encode(base64_encode($Password))."', `state_id` = '".$StateId."', `district_id` = '".$DistrictId."', `city_id` = '".$CityId."', `address` = '".$Address."', `pincode` = '".$Pincode."', `mobile_no` = '".$MobileNumber."', `phone_no` = '".$PhoneNo."', `email_id` = '".$EmailId."', `grade` = '".$Grade."' WHERE `id` = '".$_POST['update_id']."'");
    }
    header("location:school_details.php");
   
}
?>