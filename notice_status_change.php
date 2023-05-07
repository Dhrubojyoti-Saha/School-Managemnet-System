 <?php
include 'db_connection.php';

if(isset($_GET['status']) && $_GET['status'] != '' && isset($_GET['id']) && $_GET['id'] != ''){
    
    $FlatConn -> query('UPDATE `notice_tbl` SET `status`="'.$_GET['status'].'" WHERE `id` = "'.$_GET['id'].'"');
    header("location:notice.php");
}else{
    header("location:notice.php");
}
?>