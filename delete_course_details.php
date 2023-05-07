<?php
include 'db_connection.php';

  $CourseId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `course_details_tbl` WHERE `id` = '".$CourseId."'");
   header("location:course_details.php");
?>