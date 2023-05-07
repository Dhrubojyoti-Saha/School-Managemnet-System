<?php
include 'db_connection.php';

  $SchoolId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `school_tbl` WHERE `id` = '".$SchoolId."'");
   header("location:school_details.php");
?>