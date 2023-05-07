 <?php
include 'db_connection.php';

if(isset($_GET['status']) && $_GET['status'] != '' && isset($_GET['id']) && $_GET['id'] != ''){
    
    $FlatConn -> query('UPDATE `admin_tbl` SET `is_active`="'.$_GET['status'].'" WHERE `id` = "'.$_GET['id'].'"');
    header("location:member_details.php");
   
}else{
    header("location:member_details.php");
}
?>