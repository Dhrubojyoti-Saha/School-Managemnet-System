<?php
include 'db_connection.php';

  $SubjectId = $_GET['id'];

  $FlatConn -> query("DELETE FROM `subject_tbl` WHERE `id` = '".$SubjectId."'");
   header("location:subject.php");
?>