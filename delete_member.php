<?php
include 'db_connection.php';

  $MemberId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `admin_tbl` WHERE `id` = '".$MemberId."'");
   header("location:member_details.php");
?>