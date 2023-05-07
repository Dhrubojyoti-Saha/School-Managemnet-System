<?php
include 'db_connection.php';

  $NoticeId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `notice_tbl` WHERE `id` = '".$NoticeId."'");
   header("location:notice.php");
?>