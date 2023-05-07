<?php
include 'db_connection.php';

  $StudentId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `student_tbl` WHERE `id` = '".$StudentId."'");
   header("location:student_details.php");
?>